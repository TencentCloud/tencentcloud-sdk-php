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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListModel请求参数结构体
 *
 * @method string getAppType() 获取应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
 * @method void setAppType(string $AppType) 设置应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
 * @method string getPattern() 获取应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
 * @method void setPattern(string $Pattern) 设置应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
 * @method string getModelCategory() 获取模型类别 generate：生成模型，thought：思考模型
 * @method void setModelCategory(string $ModelCategory) 设置模型类别 generate：生成模型，thought：思考模型
 * @method string getLoginUin() 获取登录用户主账号(集成商模式必填)	
 * @method void setLoginUin(string $LoginUin) 设置登录用户主账号(集成商模式必填)	
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)	
 */
class ListModelRequest extends AbstractModel
{
    /**
     * @var string 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
     */
    public $AppType;

    /**
     * @var string 应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
     */
    public $Pattern;

    /**
     * @var string 模型类别 generate：生成模型，thought：思考模型
     */
    public $ModelCategory;

    /**
     * @var string 登录用户主账号(集成商模式必填)	
     */
    public $LoginUin;

    /**
     * @var string 登录用户子账号(集成商模式必填)	
     */
    public $LoginSubAccountUin;

    /**
     * @param string $AppType 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
     * @param string $Pattern 应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
     * @param string $ModelCategory 模型类别 generate：生成模型，thought：思考模型
     * @param string $LoginUin 登录用户主账号(集成商模式必填)	
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)	
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("ModelCategory",$param) and $param["ModelCategory"] !== null) {
            $this->ModelCategory = $param["ModelCategory"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
