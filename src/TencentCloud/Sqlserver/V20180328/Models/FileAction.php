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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 允许动作信息
 *
 * @method array getAllAction() 获取支持的所有操作，值包括：view(查看列表) remark(修改备注)，deploy(部署)，delete(删除文件)
 * @method void setAllAction(array $AllAction) 设置支持的所有操作，值包括：view(查看列表) remark(修改备注)，deploy(部署)，delete(删除文件)
 * @method array getAllowedAction() 获取当前状态允许的操作，AllAction的子集,为空表示禁止所有操作
 * @method void setAllowedAction(array $AllowedAction) 设置当前状态允许的操作，AllAction的子集,为空表示禁止所有操作
 */
class FileAction extends AbstractModel
{
    /**
     * @var array 支持的所有操作，值包括：view(查看列表) remark(修改备注)，deploy(部署)，delete(删除文件)
     */
    public $AllAction;

    /**
     * @var array 当前状态允许的操作，AllAction的子集,为空表示禁止所有操作
     */
    public $AllowedAction;

    /**
     * @param array $AllAction 支持的所有操作，值包括：view(查看列表) remark(修改备注)，deploy(部署)，delete(删除文件)
     * @param array $AllowedAction 当前状态允许的操作，AllAction的子集,为空表示禁止所有操作
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
        if (array_key_exists("AllAction",$param) and $param["AllAction"] !== null) {
            $this->AllAction = $param["AllAction"];
        }

        if (array_key_exists("AllowedAction",$param) and $param["AllowedAction"] !== null) {
            $this->AllowedAction = $param["AllowedAction"];
        }
    }
}
