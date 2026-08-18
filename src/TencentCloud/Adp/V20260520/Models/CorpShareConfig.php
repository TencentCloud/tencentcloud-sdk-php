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
 * CorpShareConfig
 *
 * @method boolean getEnabled() 获取<p>企业共享开关</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>企业共享开关</p>
 * @method integer getShareScope() 获取<p>共享范围类型，1：企业全员，2：指定账户，3：指定空间</p>
 * @method void setShareScope(integer $ShareScope) 设置<p>共享范围类型，1：企业全员，2：指定账户，3：指定空间</p>
 * @method array getTagIdList() 获取<p>企业共享应用标签</p>
 * @method void setTagIdList(array $TagIdList) 设置<p>企业共享应用标签</p>
 * @method array getShareScopeList() 获取<p>共享范围信息(用户时StrId为uin,Name为用户名称;空间时StrId为空间ID,Name为空间名称)</p>
 * @method void setShareScopeList(array $ShareScopeList) 设置<p>共享范围信息(用户时StrId为uin,Name为用户名称;空间时StrId为空间ID,Name为空间名称)</p>
 */
class CorpShareConfig extends AbstractModel
{
    /**
     * @var boolean <p>企业共享开关</p>
     */
    public $Enabled;

    /**
     * @var integer <p>共享范围类型，1：企业全员，2：指定账户，3：指定空间</p>
     */
    public $ShareScope;

    /**
     * @var array <p>企业共享应用标签</p>
     */
    public $TagIdList;

    /**
     * @var array <p>共享范围信息(用户时StrId为uin,Name为用户名称;空间时StrId为空间ID,Name为空间名称)</p>
     */
    public $ShareScopeList;

    /**
     * @param boolean $Enabled <p>企业共享开关</p>
     * @param integer $ShareScope <p>共享范围类型，1：企业全员，2：指定账户，3：指定空间</p>
     * @param array $TagIdList <p>企业共享应用标签</p>
     * @param array $ShareScopeList <p>共享范围信息(用户时StrId为uin,Name为用户名称;空间时StrId为空间ID,Name为空间名称)</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ShareScope",$param) and $param["ShareScope"] !== null) {
            $this->ShareScope = $param["ShareScope"];
        }

        if (array_key_exists("TagIdList",$param) and $param["TagIdList"] !== null) {
            $this->TagIdList = $param["TagIdList"];
        }

        if (array_key_exists("ShareScopeList",$param) and $param["ShareScopeList"] !== null) {
            $this->ShareScopeList = [];
            foreach ($param["ShareScopeList"] as $key => $value){
                $obj = new Identity();
                $obj->deserialize($value);
                array_push($this->ShareScopeList, $obj);
            }
        }
    }
}
