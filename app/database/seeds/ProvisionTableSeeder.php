<?php

/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 1:30 AM
 */
class ProvisionTableSeeder extends Seeder {
	public function run()
	{
		DB::table('provisions')->delete();

		$data = [
			[
				'need_id' => 1,
				'event_id' => 1,
				'content' => '{
          "name": "Food",
          "children": [
            {
              "name": "General",
              "value": 0
            },
            {
              "name": "Infant",
              "value": 0
            }
          ]
        },
        {
          "name": "Water",
          "value": 1
        },
        {
          "name": "Toiletries",
          "children": [
            {
              "name": "General",
              "value": 0
            },
            {
              "name": "Diapers",
              "value": 0
            }
          ]
        }'
			],
			[
				'need_id' => 2,
				'event_id' => 1,
				'content' => '{
      "name": "Clothing",
      "children": [
        {
          "name": "Basic",
          "children": [
            {
              "name": "Infant",
              "value": 0
            },
            {
              "name": "Child",
              "value": 0
            },
            {
              "name": "Teen",
              "value": 0
            },
            {
              "name": "Adult",
              "value": 0
            }
          ]
        },
        {
          "name": "Underwear",
          "children": [
            {
              "name": "Infant",
              "value": 0
            },
            {
              "name": "Child",
              "value": 0
            },
            {
              "name": "Teen",
              "value": 0
            },
            {
              "name": "Adult",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 3,
				'event_id' => 1,
				'content' => '{
      "name": "Health",
      "children": [
        {
          "name": "Personnel",
          "children": [
            {
              "name": "Surgeon",
              "value": 0
            },
            {
              "name": "Physician",
              "value": 0
            },
            {
              "name": "Midwife",
              "value": 0
            },
            {
              "name": "Nurse",
              "value": 0
            },
            {
              "name": "Pediatrician",
              "value": 0
            }
          ]
        },
        {
          "name": "Medicine",
          "children": [
            {
              "name": "For fever",
              "value": 0
            },
            {
              "name": "For colds",
              "value": 0
            },
            {
              "name": "For headache",
              "value": 0
            },
            {
              "name": "For cough",
              "value": 0
            },
            {
              "name": "For diarrhea",
              "value": 0
            },
            {
              "name": "Multivitamins",
              "value": 0
            },
            {
              "name": "Maintenance",
              "value": 0
            }
          ]
        },
        {
          "name": "Equipment",
          "children": [
            {
              "name": "Wheelchairs",
              "value": 0
            },
            {
              "name": "Breathing apparatuses",
              "value": 0
            },
            {
              "name": "Canes",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 4,
				'event_id' => 1,
				'content' => '{
      "name": "Shelter",
      "children": [
        {
          "name": "Beddings",
          "children": [
            {
              "name": "Blankets",
              "value": 0
            },
            {
              "name": "Pillows",
              "value": 0
            },
            {
              "name": "Mattresses",
              "value": 0
            }
          ]
        },
        {
          "name": "Tents",
          "value": 0
        },
        {
          "name": "Evacuation",
          "value": 0
        }
      ]
    }'
			],
			[
				'need_id' => 5,
				'event_id' => 1,
				'content' => '{
      "name": "Communication",
      "children": [
        {
          "name": "Internet",
          "value": 0
        },
        {
          "name": "Signal",
          "value": 0
        },
        {
          "name": "Cellular phones",
          "value": 0
        },
        {
          "name": "Radio/TV",
          "value": 0
        }
      ]
    }'
			],
			[
				'need_id' => 6,
				'event_id' => 1,
				'content' => '{
      "name": "Electricity",
      "children": [
        {
          "name": "Generators",
          "value": 0
        },
        {
          "name": "Batteries",
          "children": [
            {
              "name": "General-purpose",
              "value": 0
            },
            {
              "name": "Automobile",
              "value": 0
            },
            {
              "name": "Cellular phone",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 7,
				'event_id' => 1,
				'content' => '{
      "name": "Equipment",
      "children": [
        {
          "name": "Small",
          "children": [
            {
              "name": "Flashlights",
              "value": 0
            },
            {
              "name": "First aid kits",
              "value": 0
            },
            {
              "name": "Cold storage",
              "value": 0
            },
            {
              "name": "Body bags",
              "value": 0
            },
            {
              "name": "Wood saws",
              "value": 0
            }
          ]
        },
        {
          "name": "Large",
          "children": [{
            "name": "Vehicles",
            "children": [
              {
                "name": "Transportation",
                "children": [
                  {
                    "name": "Amphibious",
                    "value": 0
                  },
                  {
                    "name": "Land",
                    "value": 0
                  }
                ]
              },
              {
                "name": "Utility",
                "children": [
                  {
                    "name": "Excavators",
                    "value": 0
                  },
                  {
                    "name": "Drillers",
                    "value": 0
                  },
                  {
                    "name": "Bulldozers",
                    "value": 0
                  }
                ]
              }
            ]
          }]
        }
      ]
    }'
			],
			[
				'need_id' => 1,
				'event_id' => 2,
				'content' => '{
          "name": "Food",
          "children": [
            {
              "name": "General",
              "value": 0
            },
            {
              "name": "Infant",
              "value": 0
            }
          ]
        },
        {
          "name": "Water",
          "value": 1
        },
        {
          "name": "Toiletries",
          "children": [
            {
              "name": "General",
              "value": 0
            },
            {
              "name": "Diapers",
              "value": 0
            }
          ]
        }'
			],
			[
				'need_id' => 2,
				'event_id' => 2,
				'content' => '{
      "name": "Clothing",
      "children": [
        {
          "name": "Basic",
          "children": [
            {
              "name": "Infant",
              "value": 0
            },
            {
              "name": "Child",
              "value": 0
            },
            {
              "name": "Teen",
              "value": 0
            },
            {
              "name": "Adult",
              "value": 0
            }
          ]
        },
        {
          "name": "Underwear",
          "children": [
            {
              "name": "Infant",
              "value": 0
            },
            {
              "name": "Child",
              "value": 0
            },
            {
              "name": "Teen",
              "value": 0
            },
            {
              "name": "Adult",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 3,
				'event_id' => 2,
				'content' => '{
      "name": "Health",
      "children": [
        {
          "name": "Personnel",
          "children": [
            {
              "name": "Surgeon",
              "value": 0
            },
            {
              "name": "Physician",
              "value": 0
            },
            {
              "name": "Midwife",
              "value": 0
            },
            {
              "name": "Nurse",
              "value": 0
            },
            {
              "name": "Pediatrician",
              "value": 0
            }
          ]
        },
        {
          "name": "Medicine",
          "children": [
            {
              "name": "For fever",
              "value": 0
            },
            {
              "name": "For colds",
              "value": 0
            },
            {
              "name": "For headache",
              "value": 0
            },
            {
              "name": "For cough",
              "value": 0
            },
            {
              "name": "For diarrhea",
              "value": 0
            },
            {
              "name": "Multivitamins",
              "value": 0
            },
            {
              "name": "Maintenance",
              "value": 0
            }
          ]
        },
        {
          "name": "Equipment",
          "children": [
            {
              "name": "Wheelchairs",
              "value": 0
            },
            {
              "name": "Breathing apparatuses",
              "value": 0
            },
            {
              "name": "Canes",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 4,
				'event_id' => 2,
				'content' => '{
      "name": "Shelter",
      "children": [
        {
          "name": "Beddings",
          "children": [
            {
              "name": "Blankets",
              "value": 0
            },
            {
              "name": "Pillows",
              "value": 0
            },
            {
              "name": "Mattresses",
              "value": 0
            }
          ]
        },
        {
          "name": "Tents",
          "value": 0
        },
        {
          "name": "Evacuation",
          "value": 0
        }
      ]
    }'
			],
			[
				'need_id' => 5,
				'event_id' => 2,
				'content' => '{
      "name": "Communication",
      "children": [
        {
          "name": "Internet",
          "value": 0
        },
        {
          "name": "Signal",
          "value": 0
        },
        {
          "name": "Cellular phones",
          "value": 0
        },
        {
          "name": "Radio/TV",
          "value": 0
        }
      ]
    }'
			],
			[
				'need_id' => 6,
				'event_id' => 2,
				'content' => '{
      "name": "Electricity",
      "children": [
        {
          "name": "Generators",
          "value": 0
        },
        {
          "name": "Batteries",
          "children": [
            {
              "name": "General-purpose",
              "value": 0
            },
            {
              "name": "Automobile",
              "value": 0
            },
            {
              "name": "Cellular phone",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 7,
				'event_id' => 2,
				'content' => '{
      "name": "Equipment",
      "children": [
        {
          "name": "Small",
          "children": [
            {
              "name": "Flashlights",
              "value": 0
            },
            {
              "name": "First aid kits",
              "value": 0
            },
            {
              "name": "Cold storage",
              "value": 0
            },
            {
              "name": "Body bags",
              "value": 0
            },
            {
              "name": "Wood saws",
              "value": 0
            }
          ]
        },
        {
          "name": "Large",
          "children": [{
            "name": "Vehicles",
            "children": [
              {
                "name": "Transportation",
                "children": [
                  {
                    "name": "Amphibious",
                    "value": 0
                  },
                  {
                    "name": "Land",
                    "value": 0
                  }
                ]
              },
              {
                "name": "Utility",
                "children": [
                  {
                    "name": "Excavators",
                    "value": 0
                  },
                  {
                    "name": "Drillers",
                    "value": 0
                  },
                  {
                    "name": "Bulldozers",
                    "value": 0
                  }
                ]
              }
            ]
          }]
        }
      ]
    }'
			],
			[
				'need_id' => 1,
				'event_id' => 3,
				'content' => '{
          "name": "Food",
          "children": [
            {
              "name": "General",
              "value": 0
            },
            {
              "name": "Infant",
              "value": 0
            }
          ]
        },
        {
          "name": "Water",
          "value": 1
        },
        {
          "name": "Toiletries",
          "children": [
            {
              "name": "General",
              "value": 0
            },
            {
              "name": "Diapers",
              "value": 0
            }
          ]
        }'
			],
			[
				'need_id' => 2,
				'event_id' => 3,
				'content' => '{
      "name": "Clothing",
      "children": [
        {
          "name": "Basic",
          "children": [
            {
              "name": "Infant",
              "value": 0
            },
            {
              "name": "Child",
              "value": 0
            },
            {
              "name": "Teen",
              "value": 0
            },
            {
              "name": "Adult",
              "value": 0
            }
          ]
        },
        {
          "name": "Underwear",
          "children": [
            {
              "name": "Infant",
              "value": 0
            },
            {
              "name": "Child",
              "value": 0
            },
            {
              "name": "Teen",
              "value": 0
            },
            {
              "name": "Adult",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 3,
				'event_id' => 3,
				'content' => '{
      "name": "Health",
      "children": [
        {
          "name": "Personnel",
          "children": [
            {
              "name": "Surgeon",
              "value": 0
            },
            {
              "name": "Physician",
              "value": 0
            },
            {
              "name": "Midwife",
              "value": 0
            },
            {
              "name": "Nurse",
              "value": 0
            },
            {
              "name": "Pediatrician",
              "value": 0
            }
          ]
        },
        {
          "name": "Medicine",
          "children": [
            {
              "name": "For fever",
              "value": 0
            },
            {
              "name": "For colds",
              "value": 0
            },
            {
              "name": "For headache",
              "value": 0
            },
            {
              "name": "For cough",
              "value": 0
            },
            {
              "name": "For diarrhea",
              "value": 0
            },
            {
              "name": "Multivitamins",
              "value": 0
            },
            {
              "name": "Maintenance",
              "value": 0
            }
          ]
        },
        {
          "name": "Equipment",
          "children": [
            {
              "name": "Wheelchairs",
              "value": 0
            },
            {
              "name": "Breathing apparatuses",
              "value": 0
            },
            {
              "name": "Canes",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 4,
				'event_id' => 3,
				'content' => '{
      "name": "Shelter",
      "children": [
        {
          "name": "Beddings",
          "children": [
            {
              "name": "Blankets",
              "value": 0
            },
            {
              "name": "Pillows",
              "value": 0
            },
            {
              "name": "Mattresses",
              "value": 0
            }
          ]
        },
        {
          "name": "Tents",
          "value": 0
        },
        {
          "name": "Evacuation",
          "value": 0
        }
      ]
    }'
			],
			[
				'need_id' => 5,
				'event_id' => 3,
				'content' => '{
      "name": "Communication",
      "children": [
        {
          "name": "Internet",
          "value": 0
        },
        {
          "name": "Signal",
          "value": 0
        },
        {
          "name": "Cellular phones",
          "value": 0
        },
        {
          "name": "Radio/TV",
          "value": 0
        }
      ]
    }'
			],
			[
				'need_id' => 6,
				'event_id' => 3,
				'content' => '{
      "name": "Electricity",
      "children": [
        {
          "name": "Generators",
          "value": 0
        },
        {
          "name": "Batteries",
          "children": [
            {
              "name": "General-purpose",
              "value": 0
            },
            {
              "name": "Automobile",
              "value": 0
            },
            {
              "name": "Cellular phone",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 7,
				'event_id' => 3,
				'content' => '{
      "name": "Equipment",
      "children": [
        {
          "name": "Small",
          "children": [
            {
              "name": "Flashlights",
              "value": 0
            },
            {
              "name": "First aid kits",
              "value": 0
            },
            {
              "name": "Cold storage",
              "value": 0
            },
            {
              "name": "Body bags",
              "value": 0
            },
            {
              "name": "Wood saws",
              "value": 0
            }
          ]
        },
        {
          "name": "Large",
          "children": [{
            "name": "Vehicles",
            "children": [
              {
                "name": "Transportation",
                "children": [
                  {
                    "name": "Amphibious",
                    "value": 0
                  },
                  {
                    "name": "Land",
                    "value": 0
                  }
                ]
              },
              {
                "name": "Utility",
                "children": [
                  {
                    "name": "Excavators",
                    "value": 0
                  },
                  {
                    "name": "Drillers",
                    "value": 0
                  },
                  {
                    "name": "Bulldozers",
                    "value": 0
                  }
                ]
              }
            ]
          }]
        }
      ]
    }'
			],
			[
				'need_id' => 1,
				'event_id' => 4,
				'content' => '{
          "name": "Food",
          "children": [
            {
              "name": "General",
              "value": 0
            },
            {
              "name": "Infant",
              "value": 0
            }
          ]
        },
        {
          "name": "Water",
          "value": 1
        },
        {
          "name": "Toiletries",
          "children": [
            {
              "name": "General",
              "value": 0
            },
            {
              "name": "Diapers",
              "value": 0
            }
          ]
        }'
			],
			[
				'need_id' => 2,
				'event_id' => 4,
				'content' => '{
      "name": "Clothing",
      "children": [
        {
          "name": "Basic",
          "children": [
            {
              "name": "Infant",
              "value": 0
            },
            {
              "name": "Child",
              "value": 0
            },
            {
              "name": "Teen",
              "value": 0
            },
            {
              "name": "Adult",
              "value": 0
            }
          ]
        },
        {
          "name": "Underwear",
          "children": [
            {
              "name": "Infant",
              "value": 0
            },
            {
              "name": "Child",
              "value": 0
            },
            {
              "name": "Teen",
              "value": 0
            },
            {
              "name": "Adult",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 3,
				'event_id' => 4,
				'content' => '{
      "name": "Health",
      "children": [
        {
          "name": "Personnel",
          "children": [
            {
              "name": "Surgeon",
              "value": 0
            },
            {
              "name": "Physician",
              "value": 0
            },
            {
              "name": "Midwife",
              "value": 0
            },
            {
              "name": "Nurse",
              "value": 0
            },
            {
              "name": "Pediatrician",
              "value": 0
            }
          ]
        },
        {
          "name": "Medicine",
          "children": [
            {
              "name": "For fever",
              "value": 0
            },
            {
              "name": "For colds",
              "value": 0
            },
            {
              "name": "For headache",
              "value": 0
            },
            {
              "name": "For cough",
              "value": 0
            },
            {
              "name": "For diarrhea",
              "value": 0
            },
            {
              "name": "Multivitamins",
              "value": 0
            },
            {
              "name": "Maintenance",
              "value": 0
            }
          ]
        },
        {
          "name": "Equipment",
          "children": [
            {
              "name": "Wheelchairs",
              "value": 0
            },
            {
              "name": "Breathing apparatuses",
              "value": 0
            },
            {
              "name": "Canes",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 4,
				'event_id' => 4,
				'content' => '{
      "name": "Shelter",
      "children": [
        {
          "name": "Beddings",
          "children": [
            {
              "name": "Blankets",
              "value": 0
            },
            {
              "name": "Pillows",
              "value": 0
            },
            {
              "name": "Mattresses",
              "value": 0
            }
          ]
        },
        {
          "name": "Tents",
          "value": 0
        },
        {
          "name": "Evacuation",
          "value": 0
        }
      ]
    }'
			],
			[
				'need_id' => 5,
				'event_id' => 4,
				'content' => '{
      "name": "Communication",
      "children": [
        {
          "name": "Internet",
          "value": 0
        },
        {
          "name": "Signal",
          "value": 0
        },
        {
          "name": "Cellular phones",
          "value": 0
        },
        {
          "name": "Radio/TV",
          "value": 0
        }
      ]
    }'
			],
			[
				'need_id' => 6,
				'event_id' => 4,
				'content' => '{
      "name": "Electricity",
      "children": [
        {
          "name": "Generators",
          "value": 0
        },
        {
          "name": "Batteries",
          "children": [
            {
              "name": "General-purpose",
              "value": 0
            },
            {
              "name": "Automobile",
              "value": 0
            },
            {
              "name": "Cellular phone",
              "value": 0
            }
          ]
        }
      ]
    }'
			],
			[
				'need_id' => 7,
				'event_id' => 4,
				'content' => '{
      "name": "Equipment",
      "children": [
        {
          "name": "Small",
          "children": [
            {
              "name": "Flashlights",
              "value": 0
            },
            {
              "name": "First aid kits",
              "value": 0
            },
            {
              "name": "Cold storage",
              "value": 0
            },
            {
              "name": "Body bags",
              "value": 0
            },
            {
              "name": "Wood saws",
              "value": 0
            }
          ]
        },
        {
          "name": "Large",
          "children": [{
            "name": "Vehicles",
            "children": [
              {
                "name": "Transportation",
                "children": [
                  {
                    "name": "Amphibious",
                    "value": 0
                  },
                  {
                    "name": "Land",
                    "value": 0
                  }
                ]
              },
              {
                "name": "Utility",
                "children": [
                  {
                    "name": "Excavators",
                    "value": 0
                  },
                  {
                    "name": "Drillers",
                    "value": 0
                  },
                  {
                    "name": "Bulldozers",
                    "value": 0
                  }
                ]
              }
            ]
          }]
        }
      ]
    }'
			],

		];

		Provision::create($data);
	}
}