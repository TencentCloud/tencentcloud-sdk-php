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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述组件版本的详情，包含组件发布时间、Copyright列表、组件描述Tag。
 *
 * @method string getPublishTime() 获取版本发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishTime(string $PublishTime) 设置版本发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCopyrightList() 获取当前版本的所有copyright
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCopyrightList(array $CopyrightList) 设置当前版本的所有copyright
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取版本标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置版本标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComponentVersionInfo extends AbstractModel
{
    /**
     * @var string 版本发布时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishTime;

    /**
     * @var array 当前版本的所有copyright
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CopyrightList;

    /**
     * @var array 版本标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @param string $PublishTime 版本发布时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CopyrightList 当前版本的所有copyright
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList 版本标签
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("CopyrightList",$param) and $param["CopyrightList"] !== null) {
            $this->CopyrightList = $param["CopyrightList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }
    }
}
