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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourceGraphEntityTopicsRelation请求参数结构体
 *
 * @method string getResourceGraphId() 获取<p>资源图谱id</p>
 * @method void setResourceGraphId(string $ResourceGraphId) 设置<p>资源图谱id</p>
 * @method string getEntityId() 获取<p>实体id</p><p>仅支持手动关联tke以下实体：node、pod、deployment、statefulset、daemonset</p>
 * @method void setEntityId(string $EntityId) 设置<p>实体id</p><p>仅支持手动关联tke以下实体：node、pod、deployment、statefulset、daemonset</p>
 * @method array getTopicInfos() 获取<p>资源图谱实体关联的topic</p>
 * @method void setTopicInfos(array $TopicInfos) 设置<p>资源图谱实体关联的topic</p>
 */
class ModifyResourceGraphEntityTopicsRelationRequest extends AbstractModel
{
    /**
     * @var string <p>资源图谱id</p>
     */
    public $ResourceGraphId;

    /**
     * @var string <p>实体id</p><p>仅支持手动关联tke以下实体：node、pod、deployment、statefulset、daemonset</p>
     */
    public $EntityId;

    /**
     * @var array <p>资源图谱实体关联的topic</p>
     */
    public $TopicInfos;

    /**
     * @param string $ResourceGraphId <p>资源图谱id</p>
     * @param string $EntityId <p>实体id</p><p>仅支持手动关联tke以下实体：node、pod、deployment、statefulset、daemonset</p>
     * @param array $TopicInfos <p>资源图谱实体关联的topic</p>
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
        if (array_key_exists("ResourceGraphId",$param) and $param["ResourceGraphId"] !== null) {
            $this->ResourceGraphId = $param["ResourceGraphId"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("TopicInfos",$param) and $param["TopicInfos"] !== null) {
            $this->TopicInfos = [];
            foreach ($param["TopicInfos"] as $key => $value){
                $obj = new ResourceGraphEntityRelatedTopic();
                $obj->deserialize($value);
                array_push($this->TopicInfos, $obj);
            }
        }
    }
}
