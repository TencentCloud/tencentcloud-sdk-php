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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建 vpc 信息
 *
 * @method string getVpcId() 获取vpc id
 * @method void setVpcId(string $VpcId) 设置vpc id
 * @method integer getCreateType() 获取1 新建 2 指定
 * @method void setCreateType(integer $CreateType) 设置1 新建 2 指定
 * @method array getSubnetIds() 获取子网ID列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID列表
 */
class CreateVpcInfo extends AbstractModel
{
    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var integer 1 新建 2 指定
     */
    public $CreateType;

    /**
     * @var array 子网ID列表
     */
    public $SubnetIds;

    /**
     * @param string $VpcId vpc id
     * @param integer $CreateType 1 新建 2 指定
     * @param array $SubnetIds 子网ID列表
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CreateType",$param) and $param["CreateType"] !== null) {
            $this->CreateType = $param["CreateType"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
