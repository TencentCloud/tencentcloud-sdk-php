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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGlobalDomainAttribute请求参数结构体
 *
 * @method string getDomainId() 获取域名ID
 * @method void setDomainId(string $DomainId) 设置域名ID
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getAlias() 获取别名
 * @method void setAlias(string $Alias) 设置别名
 * @method string getDefaultValue() 获取默认入口
 * @method void setDefaultValue(string $DefaultValue) 设置默认入口
 */
class ModifyGlobalDomainAttributeRequest extends AbstractModel
{
    /**
     * @var string 域名ID
     */
    public $DomainId;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 别名
     */
    public $Alias;

    /**
     * @var string 默认入口
     */
    public $DefaultValue;

    /**
     * @param string $DomainId 域名ID
     * @param integer $ProjectId 项目ID
     * @param string $Alias 别名
     * @param string $DefaultValue 默认入口
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }
    }
}
