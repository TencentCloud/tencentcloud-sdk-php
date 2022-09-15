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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递任务出入参 Content
 *
 * @method boolean getEnableTag() 获取是否投递 TAG 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableTag(boolean $EnableTag) 设置是否投递 TAG 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMetaFields() 获取需要投递的元数据列表，目前仅支持：\_\_SOURCE\_\_，\_\_FILENAME\_\_，\_\_TIMESTAMP\_\_，\_\_HOSTNAME\_\_和\_\_PKGID\_\_
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaFields(array $MetaFields) 设置需要投递的元数据列表，目前仅支持：\_\_SOURCE\_\_，\_\_FILENAME\_\_，\_\_TIMESTAMP\_\_，\_\_HOSTNAME\_\_和\_\_PKGID\_\_
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTagJsonNotTiled() 获取当EnableTag为true时，必须填写TagJsonNotTiled字段，TagJsonNotTiled用于标识tag信息是否json平铺，TagJsonNotTiled为true时不平铺，false时平铺
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagJsonNotTiled(boolean $TagJsonNotTiled) 设置当EnableTag为true时，必须填写TagJsonNotTiled字段，TagJsonNotTiled用于标识tag信息是否json平铺，TagJsonNotTiled为true时不平铺，false时平铺
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestampAccuracy() 获取投递时间戳精度，可选项 [1:秒；2:毫秒] ，默认是秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestampAccuracy(integer $TimestampAccuracy) 设置投递时间戳精度，可选项 [1:秒；2:毫秒] ，默认是秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerContent extends AbstractModel
{
    /**
     * @var boolean 是否投递 TAG 信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableTag;

    /**
     * @var array 需要投递的元数据列表，目前仅支持：\_\_SOURCE\_\_，\_\_FILENAME\_\_，\_\_TIMESTAMP\_\_，\_\_HOSTNAME\_\_和\_\_PKGID\_\_
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaFields;

    /**
     * @var boolean 当EnableTag为true时，必须填写TagJsonNotTiled字段，TagJsonNotTiled用于标识tag信息是否json平铺，TagJsonNotTiled为true时不平铺，false时平铺
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagJsonNotTiled;

    /**
     * @var integer 投递时间戳精度，可选项 [1:秒；2:毫秒] ，默认是秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimestampAccuracy;

    /**
     * @param boolean $EnableTag 是否投递 TAG 信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MetaFields 需要投递的元数据列表，目前仅支持：\_\_SOURCE\_\_，\_\_FILENAME\_\_，\_\_TIMESTAMP\_\_，\_\_HOSTNAME\_\_和\_\_PKGID\_\_
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TagJsonNotTiled 当EnableTag为true时，必须填写TagJsonNotTiled字段，TagJsonNotTiled用于标识tag信息是否json平铺，TagJsonNotTiled为true时不平铺，false时平铺
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimestampAccuracy 投递时间戳精度，可选项 [1:秒；2:毫秒] ，默认是秒
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
        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }

        if (array_key_exists("TagJsonNotTiled",$param) and $param["TagJsonNotTiled"] !== null) {
            $this->TagJsonNotTiled = $param["TagJsonNotTiled"];
        }

        if (array_key_exists("TimestampAccuracy",$param) and $param["TimestampAccuracy"] !== null) {
            $this->TimestampAccuracy = $param["TimestampAccuracy"];
        }
    }
}
