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
 * 规则模版变更历史记录视图
 *
 * @method integer getTemplateId() 获取模版ID
 * @method void setTemplateId(integer $TemplateId) 设置模版ID
 * @method integer getVersion() 获取版本
 * @method void setVersion(integer $Version) 设置版本
 * @method integer getUserId() 获取用户Id
 * @method void setUserId(integer $UserId) 设置用户Id
 * @method string getUserName() 获取用户昵称
 * @method void setUserName(string $UserName) 设置用户昵称
 * @method integer getAlterType() 获取变更类型1.新增2.修改3.删除
 * @method void setAlterType(integer $AlterType) 设置变更类型1.新增2.修改3.删除
 * @method string getAlterContent() 获取变更内容
 * @method void setAlterContent(string $AlterContent) 设置变更内容
 */
class RuleTemplateHistory extends AbstractModel
{
    /**
     * @var integer 模版ID
     */
    public $TemplateId;

    /**
     * @var integer 版本
     */
    public $Version;

    /**
     * @var integer 用户Id
     */
    public $UserId;

    /**
     * @var string 用户昵称
     */
    public $UserName;

    /**
     * @var integer 变更类型1.新增2.修改3.删除
     */
    public $AlterType;

    /**
     * @var string 变更内容
     */
    public $AlterContent;

    /**
     * @param integer $TemplateId 模版ID
     * @param integer $Version 版本
     * @param integer $UserId 用户Id
     * @param string $UserName 用户昵称
     * @param integer $AlterType 变更类型1.新增2.修改3.删除
     * @param string $AlterContent 变更内容
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AlterType",$param) and $param["AlterType"] !== null) {
            $this->AlterType = $param["AlterType"];
        }

        if (array_key_exists("AlterContent",$param) and $param["AlterContent"] !== null) {
            $this->AlterContent = $param["AlterContent"];
        }
    }
}
