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
 * ModifyDspmIdentifyLevelItem请求参数结构体
 *
 * @method integer getId() 获取<p>级别组id</p>
 * @method void setId(integer $Id) 设置<p>级别组id</p>
 * @method string getName() 获取<p>级别组名称</p>
 * @method void setName(string $Name) 设置<p>级别组名称</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getLevelScore() 获取<p>敏感程度分</p><p>取值范围：[1, 10]</p><p>单位：敏感程度</p>
 * @method void setLevelScore(integer $LevelScore) 设置<p>敏感程度分</p><p>取值范围：[1, 10]</p><p>单位：敏感程度</p>
 */
class ModifyDspmIdentifyLevelItemRequest extends AbstractModel
{
    /**
     * @var integer <p>级别组id</p>
     */
    public $Id;

    /**
     * @var string <p>级别组名称</p>
     */
    public $Name;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>敏感程度分</p><p>取值范围：[1, 10]</p><p>单位：敏感程度</p>
     */
    public $LevelScore;

    /**
     * @param integer $Id <p>级别组id</p>
     * @param string $Name <p>级别组名称</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $LevelScore <p>敏感程度分</p><p>取值范围：[1, 10]</p><p>单位：敏感程度</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("LevelScore",$param) and $param["LevelScore"] !== null) {
            $this->LevelScore = $param["LevelScore"];
        }
    }
}
