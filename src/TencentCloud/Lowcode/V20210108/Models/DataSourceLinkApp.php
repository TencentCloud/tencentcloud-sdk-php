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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源关联App信息
 *
 * @method string getId() 获取应用Id
 * @method void setId(string $Id) 设置应用Id
 * @method string getTitle() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEditStatusUse() 获取是否编辑状态使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditStatusUse(integer $EditStatusUse) 设置是否编辑状态使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPreviewStatusUse() 获取是否预览状态使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreviewStatusUse(integer $PreviewStatusUse) 设置是否预览状态使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOnlineStatusUse() 获取是否正式状态使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnlineStatusUse(integer $OnlineStatusUse) 设置是否正式状态使用
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataSourceLinkApp extends AbstractModel
{
    /**
     * @var string 应用Id
     */
    public $Id;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var integer 是否编辑状态使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditStatusUse;

    /**
     * @var integer 是否预览状态使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreviewStatusUse;

    /**
     * @var integer 是否正式状态使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnlineStatusUse;

    /**
     * @param string $Id 应用Id
     * @param string $Title 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EditStatusUse 是否编辑状态使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PreviewStatusUse 是否预览状态使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OnlineStatusUse 是否正式状态使用
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

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("EditStatusUse",$param) and $param["EditStatusUse"] !== null) {
            $this->EditStatusUse = $param["EditStatusUse"];
        }

        if (array_key_exists("PreviewStatusUse",$param) and $param["PreviewStatusUse"] !== null) {
            $this->PreviewStatusUse = $param["PreviewStatusUse"];
        }

        if (array_key_exists("OnlineStatusUse",$param) and $param["OnlineStatusUse"] !== null) {
            $this->OnlineStatusUse = $param["OnlineStatusUse"];
        }
    }
}
