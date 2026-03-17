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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInjectRiskyServiceSwitch返回参数结构体
 *
 * @method integer getJavaShellInjectRiskyServiceStatus() 获取内存马是否注入风险服务配置，0: 用户没有操作过，默认不注入 1: 注入,2:用户指定不注入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJavaShellInjectRiskyServiceStatus(integer $JavaShellInjectRiskyServiceStatus) 设置内存马是否注入风险服务配置，0: 用户没有操作过，默认不注入 1: 注入,2:用户指定不注入
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRaspInjectRiskyServiceStatus() 获取主机rasp是否注入风险服务配置，0: 用户没有操作过，默认不注入 1: 注入,2:用户指定不注入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRaspInjectRiskyServiceStatus(integer $RaspInjectRiskyServiceStatus) 设置主机rasp是否注入风险服务配置，0: 用户没有操作过，默认不注入 1: 注入,2:用户指定不注入
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取风险服务总条数
 * @method void setTotalCount(integer $TotalCount) 设置风险服务总条数
 * @method array getList() 获取风险服务列表
 * @method void setList(array $List) 设置风险服务列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInjectRiskyServiceSwitchResponse extends AbstractModel
{
    /**
     * @var integer 内存马是否注入风险服务配置，0: 用户没有操作过，默认不注入 1: 注入,2:用户指定不注入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JavaShellInjectRiskyServiceStatus;

    /**
     * @var integer 主机rasp是否注入风险服务配置，0: 用户没有操作过，默认不注入 1: 注入,2:用户指定不注入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RaspInjectRiskyServiceStatus;

    /**
     * @var integer 风险服务总条数
     */
    public $TotalCount;

    /**
     * @var array 风险服务列表
     */
    public $List;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $JavaShellInjectRiskyServiceStatus 内存马是否注入风险服务配置，0: 用户没有操作过，默认不注入 1: 注入,2:用户指定不注入
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RaspInjectRiskyServiceStatus 主机rasp是否注入风险服务配置，0: 用户没有操作过，默认不注入 1: 注入,2:用户指定不注入
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 风险服务总条数
     * @param array $List 风险服务列表
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("JavaShellInjectRiskyServiceStatus",$param) and $param["JavaShellInjectRiskyServiceStatus"] !== null) {
            $this->JavaShellInjectRiskyServiceStatus = $param["JavaShellInjectRiskyServiceStatus"];
        }

        if (array_key_exists("RaspInjectRiskyServiceStatus",$param) and $param["RaspInjectRiskyServiceStatus"] !== null) {
            $this->RaspInjectRiskyServiceStatus = $param["RaspInjectRiskyServiceStatus"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new RiskMainClass();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
