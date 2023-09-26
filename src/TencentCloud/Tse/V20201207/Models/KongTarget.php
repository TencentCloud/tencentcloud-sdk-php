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
 * Kong Upstream中的Target
 *
 * @method string getHost() 获取Host
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置Host
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealth() 获取健康状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealth(string $Health) 设置健康状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取Target的来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置Target的来源
注意：此字段可能返回 null，表示取不到有效值。
 */
class KongTarget extends AbstractModel
{
    /**
     * @var string Host
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var integer 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var integer 权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string 健康状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Health;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string Target的来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @param string $Host Host
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Health 健康状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source Target的来源
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
