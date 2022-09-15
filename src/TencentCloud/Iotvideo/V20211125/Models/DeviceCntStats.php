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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备数量统计
 *
 * @method string getDate() 获取统计日期
 * @method void setDate(string $Date) 设置统计日期
 * @method integer getNewRegisterCnt() 获取新增注册设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewRegisterCnt(integer $NewRegisterCnt) 设置新增注册设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNewActivateCnt() 获取新增激活设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewActivateCnt(integer $NewActivateCnt) 设置新增激活设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActiveCnt() 获取活跃设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveCnt(integer $ActiveCnt) 设置活跃设备数
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceCntStats extends AbstractModel
{
    /**
     * @var string 统计日期
     */
    public $Date;

    /**
     * @var integer 新增注册设备数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewRegisterCnt;

    /**
     * @var integer 新增激活设备数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewActivateCnt;

    /**
     * @var integer 活跃设备数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveCnt;

    /**
     * @param string $Date 统计日期
     * @param integer $NewRegisterCnt 新增注册设备数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NewActivateCnt 新增激活设备数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActiveCnt 活跃设备数
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("NewRegisterCnt",$param) and $param["NewRegisterCnt"] !== null) {
            $this->NewRegisterCnt = $param["NewRegisterCnt"];
        }

        if (array_key_exists("NewActivateCnt",$param) and $param["NewActivateCnt"] !== null) {
            $this->NewActivateCnt = $param["NewActivateCnt"];
        }

        if (array_key_exists("ActiveCnt",$param) and $param["ActiveCnt"] !== null) {
            $this->ActiveCnt = $param["ActiveCnt"];
        }
    }
}
