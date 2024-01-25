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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资管管理-重命名资源文件返回信息
 *
 * @method boolean getRenameSuccess() 获取是否重命名成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenameSuccess(boolean $RenameSuccess) 设置是否重命名成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取更新用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置更新用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取更新用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置更新用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullPath() 获取路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullPath(string $FullPath) 设置路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class RenameResourceDTO extends AbstractModel
{
    /**
     * @var boolean 是否重命名成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenameSuccess;

    /**
     * @var string 更新用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string 更新用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var integer 更新日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullPath;

    /**
     * @param boolean $RenameSuccess 是否重命名成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser 更新用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId 更新用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullPath 路径
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
        if (array_key_exists("RenameSuccess",$param) and $param["RenameSuccess"] !== null) {
            $this->RenameSuccess = $param["RenameSuccess"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateUserId",$param) and $param["UpdateUserId"] !== null) {
            $this->UpdateUserId = $param["UpdateUserId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }
    }
}
