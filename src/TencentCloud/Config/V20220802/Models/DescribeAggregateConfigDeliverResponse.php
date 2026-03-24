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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAggregateConfigDeliver返回参数结构体
 *
 * @method string getDeliverName() 获取投递名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverName(string $DeliverName) 设置投递名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetArn() 获取资源六段式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetArn(string $TargetArn) 设置资源六段式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取投递状态 DeliverStatus：0 关闭  1 开启
 * @method void setStatus(integer $Status) 设置投递状态 DeliverStatus：0 关闭  1 开启
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliverPrefix() 获取日志前缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverPrefix(string $DeliverPrefix) 设置日志前缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliverType() 获取投递类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverType(string $DeliverType) 设置投递类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeliverUin() 获取支持跨账号投递的成员账号uin，只能是委派管理员。默认为0，即投递到管理员账号下
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverUin(integer $DeliverUin) 设置支持跨账号投递的成员账号uin，只能是委派管理员。默认为0，即投递到管理员账号下
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeliverContentType() 获取1：配置变更 2： 资源列表 3：全部
 * @method void setDeliverContentType(integer $DeliverContentType) 设置1：配置变更 2： 资源列表 3：全部
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAggregateConfigDeliverResponse extends AbstractModel
{
    /**
     * @var string 投递名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverName;

    /**
     * @var string 资源六段式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetArn;

    /**
     * @var integer 投递状态 DeliverStatus：0 关闭  1 开启
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 日志前缀
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverPrefix;

    /**
     * @var string 投递类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverType;

    /**
     * @var integer 支持跨账号投递的成员账号uin，只能是委派管理员。默认为0，即投递到管理员账号下
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverUin;

    /**
     * @var integer 1：配置变更 2： 资源列表 3：全部
     */
    public $DeliverContentType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DeliverName 投递名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetArn 资源六段式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 投递状态 DeliverStatus：0 关闭  1 开启
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliverPrefix 日志前缀
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliverType 投递类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeliverUin 支持跨账号投递的成员账号uin，只能是委派管理员。默认为0，即投递到管理员账号下
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeliverContentType 1：配置变更 2： 资源列表 3：全部
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
        if (array_key_exists("DeliverName",$param) and $param["DeliverName"] !== null) {
            $this->DeliverName = $param["DeliverName"];
        }

        if (array_key_exists("TargetArn",$param) and $param["TargetArn"] !== null) {
            $this->TargetArn = $param["TargetArn"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeliverPrefix",$param) and $param["DeliverPrefix"] !== null) {
            $this->DeliverPrefix = $param["DeliverPrefix"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("DeliverUin",$param) and $param["DeliverUin"] !== null) {
            $this->DeliverUin = $param["DeliverUin"];
        }

        if (array_key_exists("DeliverContentType",$param) and $param["DeliverContentType"] !== null) {
            $this->DeliverContentType = $param["DeliverContentType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
