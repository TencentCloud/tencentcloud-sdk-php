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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getInclude() 获取附加查询返回包含字段值，不传返回0，有效值 ProductNum、ProjectNum、UsedDeviceNum、TotalDevice、ActivateDevice
 * @method void setInclude(array $Include) 设置附加查询返回包含字段值，不传返回0，有效值 ProductNum、ProjectNum、UsedDeviceNum、TotalDevice、ActivateDevice
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getProductId() 获取产品ID，-1 代表全部产品
 * @method void setProductId(string $ProductId) 设置产品ID，-1 代表全部产品
 */
class DescribeInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 附加查询返回包含字段值，不传返回0，有效值 ProductNum、ProjectNum、UsedDeviceNum、TotalDevice、ActivateDevice
     */
    public $Include;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 产品ID，-1 代表全部产品
     */
    public $ProductId;

    /**
     * @param string $InstanceId 实例ID
     * @param array $Include 附加查询返回包含字段值，不传返回0，有效值 ProductNum、ProjectNum、UsedDeviceNum、TotalDevice、ActivateDevice
     * @param string $ProjectId 项目ID
     * @param string $ProductId 产品ID，-1 代表全部产品
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Include",$param) and $param["Include"] !== null) {
            $this->Include = $param["Include"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
