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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindInstances请求参数结构体
 *
 * @method array getUserIds() 获取<p>指定得到云桌面用户id</p>
 * @method void setUserIds(array $UserIds) 设置<p>指定得到云桌面用户id</p>
 * @method array getInstanceIds() 获取<p>待分配桌面实例id</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>待分配桌面实例id</p>
 * @method string getInstanceType() 获取<p>待分配桌面类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>待分配桌面类型</p>
 * @method string getInstanceRegion() 获取<p>待分配桌面所在区域</p>
 * @method void setInstanceRegion(string $InstanceRegion) 设置<p>待分配桌面所在区域</p>
 */
class BindInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>指定得到云桌面用户id</p>
     */
    public $UserIds;

    /**
     * @var array <p>待分配桌面实例id</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>待分配桌面类型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>待分配桌面所在区域</p>
     */
    public $InstanceRegion;

    /**
     * @param array $UserIds <p>指定得到云桌面用户id</p>
     * @param array $InstanceIds <p>待分配桌面实例id</p>
     * @param string $InstanceType <p>待分配桌面类型</p>
     * @param string $InstanceRegion <p>待分配桌面所在区域</p>
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
        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }
    }
}
