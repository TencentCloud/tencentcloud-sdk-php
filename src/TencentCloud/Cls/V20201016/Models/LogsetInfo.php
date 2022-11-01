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
 * 日志集相关信息
 *
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getLogsetName() 获取日志集名称
 * @method void setLogsetName(string $LogsetName) 设置日志集名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getAssumerName() 获取云产品标识，日志集由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssumerName(string $AssumerName) 设置云产品标识，日志集由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取日志集绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置日志集绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicCount() 获取日志集下日志主题的数目
 * @method void setTopicCount(integer $TopicCount) 设置日志集下日志主题的数目
 * @method string getRoleName() 获取若AssumerName非空，则表示创建该日志集的服务方角色
 * @method void setRoleName(string $RoleName) 设置若AssumerName非空，则表示创建该日志集的服务方角色
 */
class LogsetInfo extends AbstractModel
{
    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 日志集名称
     */
    public $LogsetName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 云产品标识，日志集由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssumerName;

    /**
     * @var array 日志集绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 日志集下日志主题的数目
     */
    public $TopicCount;

    /**
     * @var string 若AssumerName非空，则表示创建该日志集的服务方角色
     */
    public $RoleName;

    /**
     * @param string $LogsetId 日志集ID
     * @param string $LogsetName 日志集名称
     * @param string $CreateTime 创建时间
     * @param string $AssumerName 云产品标识，日志集由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 日志集绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicCount 日志集下日志主题的数目
     * @param string $RoleName 若AssumerName非空，则表示创建该日志集的服务方角色
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AssumerName",$param) and $param["AssumerName"] !== null) {
            $this->AssumerName = $param["AssumerName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TopicCount",$param) and $param["TopicCount"] !== null) {
            $this->TopicCount = $param["TopicCount"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
