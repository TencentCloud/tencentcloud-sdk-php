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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格组标签信息
 *
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGroupId() 获取表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGroupId(string $TableGroupId) 设置表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorInfo getError() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(ErrorInfo $Error) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TagsInfoOfTableGroup extends AbstractModel
{
    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGroupId;

    /**
     * @var array 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var ErrorInfo 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGroupId 表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorInfo $Error 错误信息
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
        if (array_key_exists('ClusterId',$param) and $param['ClusterId'] !== null) {
            $this->ClusterId = $param['ClusterId'];
        }

        if (array_key_exists('TableGroupId',$param) and $param['TableGroupId'] !== null) {
            $this->TableGroupId = $param['TableGroupId'];
        }

        if (array_key_exists('Tags',$param) and $param['Tags'] !== null) {
            $this->Tags = [];
            foreach ($param['Tags'] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists('Error',$param) and $param['Error'] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param['Error']);
        }
    }
}
