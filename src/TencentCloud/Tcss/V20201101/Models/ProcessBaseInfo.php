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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时安全，进程基础信息
 *
 * @method string getProcessStartUser() 获取进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessStartUser(string $ProcessStartUser) 设置进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessUserGroup() 获取进程用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessUserGroup(string $ProcessUserGroup) 设置进程用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessPath() 获取进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessParam() 获取进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessParam(string $ProcessParam) 设置进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProcessBaseInfo extends AbstractModel
{
    /**
     * @var string 进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessStartUser;

    /**
     * @var string 进程用户组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessUserGroup;

    /**
     * @var string 进程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessPath;

    /**
     * @var string 进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessParam;

    /**
     * @param string $ProcessStartUser 进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessUserGroup 进程用户组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessPath 进程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessParam 进程命令行参数
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
        if (array_key_exists("ProcessStartUser",$param) and $param["ProcessStartUser"] !== null) {
            $this->ProcessStartUser = $param["ProcessStartUser"];
        }

        if (array_key_exists("ProcessUserGroup",$param) and $param["ProcessUserGroup"] !== null) {
            $this->ProcessUserGroup = $param["ProcessUserGroup"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("ProcessParam",$param) and $param["ProcessParam"] !== null) {
            $this->ProcessParam = $param["ProcessParam"];
        }
    }
}
