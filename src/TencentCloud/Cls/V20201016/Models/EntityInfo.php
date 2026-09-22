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
 * 实体详情
 *
 * @method string getEntityId() 获取<p>实体 ID</p>
 * @method void setEntityId(string $EntityId) 设置<p>实体 ID</p>
 * @method string getDomain() 获取<p>实体所属域</p><p>默认值：实体所在域，如TC，App</p>
 * @method void setDomain(string $Domain) 设置<p>实体所属域</p><p>默认值：实体所在域，如TC，App</p>
 * @method string getProduct() 获取<p>实体所属产品</p><p>参数格式：实体归属的产品，如CDB, Application</p>
 * @method void setProduct(string $Product) 设置<p>实体所属产品</p><p>参数格式：实体归属的产品，如CDB, Application</p>
 * @method string getEntityName() 获取<p>实体名称</p>
 * @method void setEntityName(string $EntityName) 设置<p>实体名称</p>
 * @method string getEntityClassName() 获取<p>实体类名称</p><p>参数格式：TC.CDB.Instance</p>
 * @method void setEntityClassName(string $EntityClassName) 设置<p>实体类名称</p><p>参数格式：TC.CDB.Instance</p>
 * @method array getAttributes() 获取<p>动态属性（base 在前 + 字典序）</p>
 * @method void setAttributes(array $Attributes) 设置<p>动态属性（base 在前 + 字典序）</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method array getRelatedLogTopics() 获取<p>关联日志主题</p>
 * @method void setRelatedLogTopics(array $RelatedLogTopics) 设置<p>关联日志主题</p>
 * @method string getResourceId() 获取<p> 实体资源ID </p>
 * @method void setResourceId(string $ResourceId) 设置<p> 实体资源ID </p>
 */
class EntityInfo extends AbstractModel
{
    /**
     * @var string <p>实体 ID</p>
     */
    public $EntityId;

    /**
     * @var string <p>实体所属域</p><p>默认值：实体所在域，如TC，App</p>
     */
    public $Domain;

    /**
     * @var string <p>实体所属产品</p><p>参数格式：实体归属的产品，如CDB, Application</p>
     */
    public $Product;

    /**
     * @var string <p>实体名称</p>
     */
    public $EntityName;

    /**
     * @var string <p>实体类名称</p><p>参数格式：TC.CDB.Instance</p>
     */
    public $EntityClassName;

    /**
     * @var array <p>动态属性（base 在前 + 字典序）</p>
     */
    public $Attributes;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var array <p>关联日志主题</p>
     */
    public $RelatedLogTopics;

    /**
     * @var string <p> 实体资源ID </p>
     */
    public $ResourceId;

    /**
     * @param string $EntityId <p>实体 ID</p>
     * @param string $Domain <p>实体所属域</p><p>默认值：实体所在域，如TC，App</p>
     * @param string $Product <p>实体所属产品</p><p>参数格式：实体归属的产品，如CDB, Application</p>
     * @param string $EntityName <p>实体名称</p>
     * @param string $EntityClassName <p>实体类名称</p><p>参数格式：TC.CDB.Instance</p>
     * @param array $Attributes <p>动态属性（base 在前 + 字典序）</p>
     * @param array $Tags <p>标签列表</p>
     * @param array $RelatedLogTopics <p>关联日志主题</p>
     * @param string $ResourceId <p> 实体资源ID </p>
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
        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("EntityName",$param) and $param["EntityName"] !== null) {
            $this->EntityName = $param["EntityName"];
        }

        if (array_key_exists("EntityClassName",$param) and $param["EntityClassName"] !== null) {
            $this->EntityClassName = $param["EntityClassName"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = [];
            foreach ($param["Attributes"] as $key => $value){
                $obj = new EntityAttribute();
                $obj->deserialize($value);
                array_push($this->Attributes, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RelatedLogTopics",$param) and $param["RelatedLogTopics"] !== null) {
            $this->RelatedLogTopics = [];
            foreach ($param["RelatedLogTopics"] as $key => $value){
                $obj = new RelatedTopicItem();
                $obj->deserialize($value);
                array_push($this->RelatedLogTopics, $obj);
            }
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
