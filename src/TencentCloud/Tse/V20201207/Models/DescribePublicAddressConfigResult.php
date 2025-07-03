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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取云原生api网关公网地址信息响应结果
 *
 * @method string getGatewayId() 获取网关实例id
 * @method void setGatewayId(string $GatewayId) 设置网关实例id
 * @method array getConfigList() 获取公网地址信息
 * @method void setConfigList(array $ConfigList) 设置公网地址信息
 * @method integer getTotalCount() 获取总个数	
 * @method void setTotalCount(integer $TotalCount) 设置总个数	
 */
class DescribePublicAddressConfigResult extends AbstractModel
{
    /**
     * @var string 网关实例id
     */
    public $GatewayId;

    /**
     * @var array 公网地址信息
     */
    public $ConfigList;

    /**
     * @var integer 总个数	
     */
    public $TotalCount;

    /**
     * @param string $GatewayId 网关实例id
     * @param array $ConfigList 公网地址信息
     * @param integer $TotalCount 总个数	
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ConfigList",$param) and $param["ConfigList"] !== null) {
            $this->ConfigList = [];
            foreach ($param["ConfigList"] as $key => $value){
                $obj = new PublicAddressConfig();
                $obj->deserialize($value);
                array_push($this->ConfigList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
