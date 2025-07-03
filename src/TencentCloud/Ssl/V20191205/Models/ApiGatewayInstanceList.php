<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * apigateway实例详情 - 异步关联云资源数据结构
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method array getInstanceList() 获取apigateway实例详情	
 * @method void setInstanceList(array $InstanceList) 设置apigateway实例详情	
 * @method integer getTotalCount() 获取该地域下apigateway实例总数	
 * @method void setTotalCount(integer $TotalCount) 设置该地域下apigateway实例总数	
 * @method string getError() 获取是否查询异常
 * @method void setError(string $Error) 设置是否查询异常
 */
class ApiGatewayInstanceList extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var array apigateway实例详情	
     */
    public $InstanceList;

    /**
     * @var integer 该地域下apigateway实例总数	
     */
    public $TotalCount;

    /**
     * @var string 是否查询异常
     */
    public $Error;

    /**
     * @param string $Region 地域
     * @param array $InstanceList apigateway实例详情	
     * @param integer $TotalCount 该地域下apigateway实例总数	
     * @param string $Error 是否查询异常
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new ApiGatewayInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
