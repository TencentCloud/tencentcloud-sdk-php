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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改黑白名单入参
 *
 * @method integer getNameListId() 获取名单ID
 * @method void setNameListId(integer $NameListId) 设置名单ID
 * @method string getListName() 获取名单名称
 * @method void setListName(string $ListName) 设置名单名称
 * @method integer getStatus() 获取名单状态 [1 启用 2 停用]
 * @method void setStatus(integer $Status) 设置名单状态 [1 启用 2 停用]
 * @method string getRemark() 获取描述
 * @method void setRemark(string $Remark) 设置描述
 */
class InputModifyNameFront extends AbstractModel
{
    /**
     * @var integer 名单ID
     */
    public $NameListId;

    /**
     * @var string 名单名称
     */
    public $ListName;

    /**
     * @var integer 名单状态 [1 启用 2 停用]
     */
    public $Status;

    /**
     * @var string 描述
     */
    public $Remark;

    /**
     * @param integer $NameListId 名单ID
     * @param string $ListName 名单名称
     * @param integer $Status 名单状态 [1 启用 2 停用]
     * @param string $Remark 描述
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
        if (array_key_exists("NameListId",$param) and $param["NameListId"] !== null) {
            $this->NameListId = $param["NameListId"];
        }

        if (array_key_exists("ListName",$param) and $param["ListName"] !== null) {
            $this->ListName = $param["ListName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
