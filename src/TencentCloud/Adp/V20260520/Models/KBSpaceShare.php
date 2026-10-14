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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库空间共享信息
 *
 * @method boolean getIsSpaceShared() 获取<p>是否已被其他空间引用</p>
 * @method void setIsSpaceShared(boolean $IsSpaceShared) 设置<p>是否已被其他空间引用</p>
 * @method array getSharedSpaceList() 获取<p>被引用空间信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSharedSpaceList(array $SharedSpaceList) 设置<p>被引用空间信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KBShareStatus getSubStatus() 获取<p>共享状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubStatus(KBShareStatus $SubStatus) 设置<p>共享状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnable() 获取<p>是否允许操作</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否允许操作</p>
 */
class KBSpaceShare extends AbstractModel
{
    /**
     * @var boolean <p>是否已被其他空间引用</p>
     */
    public $IsSpaceShared;

    /**
     * @var array <p>被引用空间信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SharedSpaceList;

    /**
     * @var KBShareStatus <p>共享状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubStatus;

    /**
     * @var boolean <p>是否允许操作</p>
     */
    public $Enable;

    /**
     * @param boolean $IsSpaceShared <p>是否已被其他空间引用</p>
     * @param array $SharedSpaceList <p>被引用空间信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KBShareStatus $SubStatus <p>共享状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enable <p>是否允许操作</p>
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
        if (array_key_exists("IsSpaceShared",$param) and $param["IsSpaceShared"] !== null) {
            $this->IsSpaceShared = $param["IsSpaceShared"];
        }

        if (array_key_exists("SharedSpaceList",$param) and $param["SharedSpaceList"] !== null) {
            $this->SharedSpaceList = [];
            foreach ($param["SharedSpaceList"] as $key => $value){
                $obj = new Identity();
                $obj->deserialize($value);
                array_push($this->SharedSpaceList, $obj);
            }
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = new KBShareStatus();
            $this->SubStatus->deserialize($param["SubStatus"]);
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
