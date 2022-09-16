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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签分组信息。
 *
 * @method string getGroupId() 获取分组 Id。
 * @method void setGroupId(string $GroupId) 设置分组 Id。
 * @method string getName() 获取分组名。
 * @method void setName(string $Name) 设置分组名。
 * @method array getTagInfoSet() 获取标签列表。
 * @method void setTagInfoSet(array $TagInfoSet) 设置标签列表。
 */
class KTVTagGroupInfo extends AbstractModel
{
    /**
     * @var string 分组 Id。
     */
    public $GroupId;

    /**
     * @var string 分组名。
     */
    public $Name;

    /**
     * @var array 标签列表。
     */
    public $TagInfoSet;

    /**
     * @param string $GroupId 分组 Id。
     * @param string $Name 分组名。
     * @param array $TagInfoSet 标签列表。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TagInfoSet",$param) and $param["TagInfoSet"] !== null) {
            $this->TagInfoSet = [];
            foreach ($param["TagInfoSet"] as $key => $value){
                $obj = new KTVTagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfoSet, $obj);
            }
        }
    }
}
