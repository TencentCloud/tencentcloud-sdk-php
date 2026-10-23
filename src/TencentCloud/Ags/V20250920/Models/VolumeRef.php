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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对 Volume 的引用，其中 Name 或 Id 之一必须不为空
 *
 * @method string getVolumeName() 获取<p>Volume 名称；服务端在当前认证 AppId 下解析为稳定 VolumeId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeName(string $VolumeName) 设置<p>Volume 名称；服务端在当前认证 AppId 下解析为稳定 VolumeId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVolumeId() 获取<p>稳定 Volume ID，格式 vol-xxxxxxxx</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeId(string $VolumeId) 设置<p>稳定 Volume ID，格式 vol-xxxxxxxx</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class VolumeRef extends AbstractModel
{
    /**
     * @var string <p>Volume 名称；服务端在当前认证 AppId 下解析为稳定 VolumeId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeName;

    /**
     * @var string <p>稳定 Volume ID，格式 vol-xxxxxxxx</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeId;

    /**
     * @param string $VolumeName <p>Volume 名称；服务端在当前认证 AppId 下解析为稳定 VolumeId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VolumeId <p>稳定 Volume ID，格式 vol-xxxxxxxx</p>
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }
    }
}
