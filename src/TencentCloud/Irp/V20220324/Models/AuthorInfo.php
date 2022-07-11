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
namespace TencentCloud\Irp\V20220324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作者信息
 *
 * @method string getId() 获取作者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置作者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取作者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置作者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceId() 获取作者来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceId(integer $SourceId) 设置作者来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFollowType() 获取关注类型：1-关注，2-取关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowType(integer $FollowType) 设置关注类型：1-关注，2-取关
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIconUrl() 获取作者头像icon地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIconUrl(string $IconUrl) 设置作者头像icon地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuthorInfo extends AbstractModel
{
    /**
     * @var string 作者id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 作者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 作者来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceId;

    /**
     * @var integer 关注类型：1-关注，2-取关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowType;

    /**
     * @var string 作者头像icon地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IconUrl;

    /**
     * @param string $Id 作者id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 作者名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceId 作者来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FollowType 关注类型：1-关注，2-取关
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IconUrl 作者头像icon地址
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("FollowType",$param) and $param["FollowType"] !== null) {
            $this->FollowType = $param["FollowType"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }
    }
}
