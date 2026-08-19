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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAssetTag请求参数结构体
 *
 * @method string getKey() 获取<p>标签键</p>
 * @method void setKey(string $Key) 设置<p>标签键</p>
 * @method string getValue() 获取<p>标签值</p>
 * @method void setValue(string $Value) 设置<p>标签值</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getColor() 获取<p>颜色</p>
 * @method void setColor(string $Color) 设置<p>颜色</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getTaggingRule() 获取<p>打标策略</p>
 * @method void setTaggingRule(string $TaggingRule) 设置<p>打标策略</p>
 * @method boolean getApplyNow() 获取<p>是否立即执行资产打标</p>
 * @method void setApplyNow(boolean $ApplyNow) 设置<p>是否立即执行资产打标</p>
 */
class CreateAssetTagRequest extends AbstractModel
{
    /**
     * @var string <p>标签键</p>
     */
    public $Key;

    /**
     * @var string <p>标签值</p>
     */
    public $Value;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>颜色</p>
     */
    public $Color;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>打标策略</p>
     */
    public $TaggingRule;

    /**
     * @var boolean <p>是否立即执行资产打标</p>
     */
    public $ApplyNow;

    /**
     * @param string $Key <p>标签键</p>
     * @param string $Value <p>标签值</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Color <p>颜色</p>
     * @param string $Description <p>描述</p>
     * @param string $TaggingRule <p>打标策略</p>
     * @param boolean $ApplyNow <p>是否立即执行资产打标</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TaggingRule",$param) and $param["TaggingRule"] !== null) {
            $this->TaggingRule = $param["TaggingRule"];
        }

        if (array_key_exists("ApplyNow",$param) and $param["ApplyNow"] !== null) {
            $this->ApplyNow = $param["ApplyNow"];
        }
    }
}
