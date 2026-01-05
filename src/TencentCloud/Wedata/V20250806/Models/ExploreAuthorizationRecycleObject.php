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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据探索文件回收策略
 *
 * @method ExploreFileResource getResource() 获取文件资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(ExploreFileResource $Resource) 设置文件资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecycleSubjects() 获取授权详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecycleSubjects(array $RecycleSubjects) 设置授权详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExploreAuthorizationRecycleObject extends AbstractModel
{
    /**
     * @var ExploreFileResource 文件资源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var array 授权详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecycleSubjects;

    /**
     * @param ExploreFileResource $Resource 文件资源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecycleSubjects 授权详情
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new ExploreFileResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("RecycleSubjects",$param) and $param["RecycleSubjects"] !== null) {
            $this->RecycleSubjects = [];
            foreach ($param["RecycleSubjects"] as $key => $value){
                $obj = new ExploreAuthorizeSubject();
                $obj->deserialize($value);
                array_push($this->RecycleSubjects, $obj);
            }
        }
    }
}
