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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述投递配置项绑定的部署组
 *
 * @method string getConfigId() 获取配置id
 * @method void setConfigId(string $ConfigId) 设置配置id
 * @method string getConfigName() 获取配置名
 * @method void setConfigName(string $ConfigName) 设置配置名
 * @method array getCollectPath() 获取采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectPath(array $CollectPath) 设置采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroups() 获取关联部署组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroups(array $Groups) 设置关联部署组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeliveryConfigBindGroup extends AbstractModel
{
    /**
     * @var string 配置id
     */
    public $ConfigId;

    /**
     * @var string 配置名
     */
    public $ConfigName;

    /**
     * @var array 采集路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectPath;

    /**
     * @var array 关联部署组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Groups;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $ConfigId 配置id
     * @param string $ConfigName 配置名
     * @param array $CollectPath 采集路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Groups 关联部署组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("CollectPath",$param) and $param["CollectPath"] !== null) {
            $this->CollectPath = $param["CollectPath"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
