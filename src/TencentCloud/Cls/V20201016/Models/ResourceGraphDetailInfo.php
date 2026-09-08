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
 * 资源图谱基本信息
 *
 * @method string getResourceGraphId() 获取<p>资源图谱id</p>
 * @method void setResourceGraphId(string $ResourceGraphId) 设置<p>资源图谱id</p>
 * @method string getName() 获取<p>工作区名称</p>
 * @method void setName(string $Name) 设置<p>工作区名称</p>
 * @method string getDescription() 获取<p>工作区描述</p>
 * @method void setDescription(string $Description) 设置<p>工作区描述</p>
 * @method integer getStatus() 获取<p>工作区状态</p><p>枚举值：</p><ul><li>0： 初始化中</li><li>1： 成功</li><li>2： 失败</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 删除失败</li></ul>
 * @method void setStatus(integer $Status) 设置<p>工作区状态</p><p>枚举值：</p><ul><li>0： 初始化中</li><li>1： 成功</li><li>2： 失败</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 删除失败</li></ul>
 * @method integer getAccessCount() 获取<p>已接入产品数量</p>
 * @method void setAccessCount(integer $AccessCount) 设置<p>已接入产品数量</p>
 * @method array getProducts() 获取<p>接入的产品列表</p>
 * @method void setProducts(array $Products) 设置<p>接入的产品列表</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 * @method RelationLogset getRelationLogset() 获取<p>关联的日志集</p>
 * @method void setRelationLogset(RelationLogset $RelationLogset) 设置<p>关联的日志集</p>
 * @method array getRelationTopics() 获取<p>关联的topic</p>
 * @method void setRelationTopics(array $RelationTopics) 设置<p>关联的topic</p>
 * @method array getTags() 获取<p>工作区绑定的标签信息</p>
 * @method void setTags(array $Tags) 设置<p>工作区绑定的标签信息</p>
 */
class ResourceGraphDetailInfo extends AbstractModel
{
    /**
     * @var string <p>资源图谱id</p>
     */
    public $ResourceGraphId;

    /**
     * @var string <p>工作区名称</p>
     */
    public $Name;

    /**
     * @var string <p>工作区描述</p>
     */
    public $Description;

    /**
     * @var integer <p>工作区状态</p><p>枚举值：</p><ul><li>0： 初始化中</li><li>1： 成功</li><li>2： 失败</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 删除失败</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>已接入产品数量</p>
     */
    public $AccessCount;

    /**
     * @var array <p>接入的产品列表</p>
     */
    public $Products;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var RelationLogset <p>关联的日志集</p>
     */
    public $RelationLogset;

    /**
     * @var array <p>关联的topic</p>
     */
    public $RelationTopics;

    /**
     * @var array <p>工作区绑定的标签信息</p>
     */
    public $Tags;

    /**
     * @param string $ResourceGraphId <p>资源图谱id</p>
     * @param string $Name <p>工作区名称</p>
     * @param string $Description <p>工作区描述</p>
     * @param integer $Status <p>工作区状态</p><p>枚举值：</p><ul><li>0： 初始化中</li><li>1： 成功</li><li>2： 失败</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 删除失败</li></ul>
     * @param integer $AccessCount <p>已接入产品数量</p>
     * @param array $Products <p>接入的产品列表</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
     * @param RelationLogset $RelationLogset <p>关联的日志集</p>
     * @param array $RelationTopics <p>关联的topic</p>
     * @param array $Tags <p>工作区绑定的标签信息</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AccessCount",$param) and $param["AccessCount"] !== null) {
            $this->AccessCount = $param["AccessCount"];
        }

        if (array_key_exists("Products",$param) and $param["Products"] !== null) {
            $this->Products = $param["Products"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RelationLogset",$param) and $param["RelationLogset"] !== null) {
            $this->RelationLogset = new RelationLogset();
            $this->RelationLogset->deserialize($param["RelationLogset"]);
        }

        if (array_key_exists("RelationTopics",$param) and $param["RelationTopics"] !== null) {
            $this->RelationTopics = [];
            foreach ($param["RelationTopics"] as $key => $value){
                $obj = new RelationTopic();
                $obj->deserialize($value);
                array_push($this->RelationTopics, $obj);
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
    }
}
