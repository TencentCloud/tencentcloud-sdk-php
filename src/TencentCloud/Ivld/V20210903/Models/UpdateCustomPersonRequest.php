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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCustomPerson请求参数结构体
 *
 * @method string getPersonId() 获取待更新的自定义人物Id
 * @method void setPersonId(string $PersonId) 设置待更新的自定义人物Id
 * @method string getName() 获取更新后的自定义人物名称，如为空则不更新
 * @method void setName(string $Name) 设置更新后的自定义人物名称，如为空则不更新
 * @method string getBasicInfo() 获取更新后的自定义人物简介，如为空则不更新
 * @method void setBasicInfo(string $BasicInfo) 设置更新后的自定义人物简介，如为空则不更新
 * @method string getCategoryId() 获取更新后的分类信息，如为空则不更新
 * @method void setCategoryId(string $CategoryId) 设置更新后的分类信息，如为空则不更新
 */
class UpdateCustomPersonRequest extends AbstractModel
{
    /**
     * @var string 待更新的自定义人物Id
     */
    public $PersonId;

    /**
     * @var string 更新后的自定义人物名称，如为空则不更新
     */
    public $Name;

    /**
     * @var string 更新后的自定义人物简介，如为空则不更新
     */
    public $BasicInfo;

    /**
     * @var string 更新后的分类信息，如为空则不更新
     */
    public $CategoryId;

    /**
     * @param string $PersonId 待更新的自定义人物Id
     * @param string $Name 更新后的自定义人物名称，如为空则不更新
     * @param string $BasicInfo 更新后的自定义人物简介，如为空则不更新
     * @param string $CategoryId 更新后的分类信息，如为空则不更新
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = $param["BasicInfo"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }
    }
}
