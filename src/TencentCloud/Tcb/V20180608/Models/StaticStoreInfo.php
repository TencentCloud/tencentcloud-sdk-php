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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 静态托管资源信息
 *
 * @method string getEnvId() 获取环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvId(string $EnvId) 设置环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdnDomain() 获取静态域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdnDomain(string $CdnDomain) 设置静态域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucket() 获取COS桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置COS桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegoin() 获取cos区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegoin(string $Regoin) 设置cos区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取资源状态:init(初始化)/process(处理中)/online(上线)/destroying(销毁中)/offline(下线))
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置资源状态:init(初始化)/process(处理中)/online(上线)/destroying(销毁中)/offline(下线))
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class StaticStoreInfo extends AbstractModel
{
    /**
     * @var string 环境ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvId;

    /**
     * @var string 静态域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdnDomain;

    /**
     * @var string COS桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var string cos区域
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Regoin;

    /**
     * @var string 资源状态:init(初始化)/process(处理中)/online(上线)/destroying(销毁中)/offline(下线))
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @param string $EnvId 环境ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdnDomain 静态域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Bucket COS桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Regoin cos区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 资源状态:init(初始化)/process(处理中)/online(上线)/destroying(销毁中)/offline(下线))
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("CdnDomain",$param) and $param["CdnDomain"] !== null) {
            $this->CdnDomain = $param["CdnDomain"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Regoin",$param) and $param["Regoin"] !== null) {
            $this->Regoin = $param["Regoin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
