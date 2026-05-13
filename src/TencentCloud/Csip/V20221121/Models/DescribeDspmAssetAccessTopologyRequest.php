<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmAssetAccessTopology请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method string getView() 获取视图类型。ip或instance
 * @method void setView(string $View) 设置视图类型。ip或instance
 * @method Filter getFilter() 获取- 来源ip方式查看
View: "ip"

Filter:{
	{
		"Name":"Ip",
		"Values":["172.1.1.1"]
	},
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou","cdb-2222|ap-guangzhou","cdb-3333|ap-guangzhou"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}


- 实例方式查看
View: "instance"

Filter:{
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou"]
	},
	{
		"Name":"Ip",
		"Values":["172.1.1.1","172.1.1.2","172.1.1.3"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}

 * @method void setFilter(Filter $Filter) 设置- 来源ip方式查看
View: "ip"

Filter:{
	{
		"Name":"Ip",
		"Values":["172.1.1.1"]
	},
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou","cdb-2222|ap-guangzhou","cdb-3333|ap-guangzhou"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}


- 实例方式查看
View: "instance"

Filter:{
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou"]
	},
	{
		"Name":"Ip",
		"Values":["172.1.1.1","172.1.1.2","172.1.1.3"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}
 */
class DescribeDspmAssetAccessTopologyRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var string 视图类型。ip或instance
     */
    public $View;

    /**
     * @var Filter - 来源ip方式查看
View: "ip"

Filter:{
	{
		"Name":"Ip",
		"Values":["172.1.1.1"]
	},
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou","cdb-2222|ap-guangzhou","cdb-3333|ap-guangzhou"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}


- 实例方式查看
View: "instance"

Filter:{
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou"]
	},
	{
		"Name":"Ip",
		"Values":["172.1.1.1","172.1.1.2","172.1.1.3"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}

     */
    public $Filter;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param string $View 视图类型。ip或instance
     * @param Filter $Filter - 来源ip方式查看
View: "ip"

Filter:{
	{
		"Name":"Ip",
		"Values":["172.1.1.1"]
	},
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou","cdb-2222|ap-guangzhou","cdb-3333|ap-guangzhou"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}


- 实例方式查看
View: "instance"

Filter:{
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou"]
	},
	{
		"Name":"Ip",
		"Values":["172.1.1.1","172.1.1.2","172.1.1.3"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
