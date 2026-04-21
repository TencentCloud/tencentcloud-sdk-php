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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceConfig返回参数结构体
 *
 * @method integer getProtectMode() 获取<p>主实例数据保护方式，可能的返回值：0 - 异步复制方式，1 - 半同步复制方式，2 - 强同步复制方式。</p>
 * @method void setProtectMode(integer $ProtectMode) 设置<p>主实例数据保护方式，可能的返回值：0 - 异步复制方式，1 - 半同步复制方式，2 - 强同步复制方式。</p>
 * @method integer getDeployMode() 获取<p>主实例部署方式，可能的返回值：0 - 单可用部署，1 - 多可用区部署。</p>
 * @method void setDeployMode(integer $DeployMode) 设置<p>主实例部署方式，可能的返回值：0 - 单可用部署，1 - 多可用区部署。</p>
 * @method string getZone() 获取<p>实例可用区信息，格式如 &quot;ap-shanghai-2&quot;。</p>
 * @method void setZone(string $Zone) 设置<p>实例可用区信息，格式如 &quot;ap-shanghai-2&quot;。</p>
 * @method SlaveConfig getSlaveConfig() 获取<p>备库的配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveConfig(SlaveConfig $SlaveConfig) 设置<p>备库的配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackupConfig getBackupConfig() 获取<p>强同步实例第二备库的配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupConfig(BackupConfig $BackupConfig) 设置<p>强同步实例第二备库的配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSwitched() 获取<p>是否切换备库。</p>
 * @method void setSwitched(boolean $Switched) 设置<p>是否切换备库。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceConfigResponse extends AbstractModel
{
    /**
     * @var integer <p>主实例数据保护方式，可能的返回值：0 - 异步复制方式，1 - 半同步复制方式，2 - 强同步复制方式。</p>
     */
    public $ProtectMode;

    /**
     * @var integer <p>主实例部署方式，可能的返回值：0 - 单可用部署，1 - 多可用区部署。</p>
     */
    public $DeployMode;

    /**
     * @var string <p>实例可用区信息，格式如 &quot;ap-shanghai-2&quot;。</p>
     */
    public $Zone;

    /**
     * @var SlaveConfig <p>备库的配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveConfig;

    /**
     * @var BackupConfig <p>强同步实例第二备库的配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupConfig;

    /**
     * @var boolean <p>是否切换备库。</p>
     */
    public $Switched;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ProtectMode <p>主实例数据保护方式，可能的返回值：0 - 异步复制方式，1 - 半同步复制方式，2 - 强同步复制方式。</p>
     * @param integer $DeployMode <p>主实例部署方式，可能的返回值：0 - 单可用部署，1 - 多可用区部署。</p>
     * @param string $Zone <p>实例可用区信息，格式如 &quot;ap-shanghai-2&quot;。</p>
     * @param SlaveConfig $SlaveConfig <p>备库的配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackupConfig $BackupConfig <p>强同步实例第二备库的配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Switched <p>是否切换备库。</p>
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
        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SlaveConfig",$param) and $param["SlaveConfig"] !== null) {
            $this->SlaveConfig = new SlaveConfig();
            $this->SlaveConfig->deserialize($param["SlaveConfig"]);
        }

        if (array_key_exists("BackupConfig",$param) and $param["BackupConfig"] !== null) {
            $this->BackupConfig = new BackupConfig();
            $this->BackupConfig->deserialize($param["BackupConfig"]);
        }

        if (array_key_exists("Switched",$param) and $param["Switched"] !== null) {
            $this->Switched = $param["Switched"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
