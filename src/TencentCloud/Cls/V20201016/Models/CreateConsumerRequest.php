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
 * CreateConsumer请求参数结构体
 *
 * @method string getTopicId() 获取<p>投递任务绑定的日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>投递任务绑定的日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
 * @method boolean getNeedContent() 获取<p>是否投递日志的元数据信息，默认为 true。<br>当NeedContent为true时：字段Content有效。<br>当NeedContent为false时：字段Content无效。</p>
 * @method void setNeedContent(boolean $NeedContent) 设置<p>是否投递日志的元数据信息，默认为 true。<br>当NeedContent为true时：字段Content有效。<br>当NeedContent为false时：字段Content无效。</p>
 * @method ConsumerContent getContent() 获取<p>如果需要投递元数据信息，元数据信息的描述</p>
 * @method void setContent(ConsumerContent $Content) 设置<p>如果需要投递元数据信息，元数据信息的描述</p>
 * @method Ckafka getCkafka() 获取<p>CKafka的描述</p>
 * @method void setCkafka(Ckafka $Ckafka) 设置<p>CKafka的描述</p>
 * @method integer getCompression() 获取<p>投递时压缩方式，取值0，2，3。[0：NONE；2：SNAPPY；3：LZ4]</p>
 * @method void setCompression(integer $Compression) 设置<p>投递时压缩方式，取值0，2，3。[0：NONE；2：SNAPPY；3：LZ4]</p>
 * @method string getRoleArn() 获取<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
 * @method void setRoleArn(string $RoleArn) 设置<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
 * @method string getExternalId() 获取<p>外部ID</p>
 * @method void setExternalId(string $ExternalId) 设置<p>外部ID</p>
 * @method AdvancedConsumerConfiguration getAdvancedConfig() 获取<p>高级配置项</p>
 * @method void setAdvancedConfig(AdvancedConsumerConfiguration $AdvancedConfig) 设置<p>高级配置项</p>
 * @method string getDSLFilter() 获取<p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
 * @method void setDSLFilter(string $DSLFilter) 设置<p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
 */
class CreateConsumerRequest extends AbstractModel
{
    /**
     * @var string <p>投递任务绑定的日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
     */
    public $TopicId;

    /**
     * @var boolean <p>是否投递日志的元数据信息，默认为 true。<br>当NeedContent为true时：字段Content有效。<br>当NeedContent为false时：字段Content无效。</p>
     */
    public $NeedContent;

    /**
     * @var ConsumerContent <p>如果需要投递元数据信息，元数据信息的描述</p>
     */
    public $Content;

    /**
     * @var Ckafka <p>CKafka的描述</p>
     */
    public $Ckafka;

    /**
     * @var integer <p>投递时压缩方式，取值0，2，3。[0：NONE；2：SNAPPY；3：LZ4]</p>
     */
    public $Compression;

    /**
     * @var string <p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
     */
    public $RoleArn;

    /**
     * @var string <p>外部ID</p>
     */
    public $ExternalId;

    /**
     * @var AdvancedConsumerConfiguration <p>高级配置项</p>
     */
    public $AdvancedConfig;

    /**
     * @var string <p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
     */
    public $DSLFilter;

    /**
     * @param string $TopicId <p>投递任务绑定的日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
     * @param boolean $NeedContent <p>是否投递日志的元数据信息，默认为 true。<br>当NeedContent为true时：字段Content有效。<br>当NeedContent为false时：字段Content无效。</p>
     * @param ConsumerContent $Content <p>如果需要投递元数据信息，元数据信息的描述</p>
     * @param Ckafka $Ckafka <p>CKafka的描述</p>
     * @param integer $Compression <p>投递时压缩方式，取值0，2，3。[0：NONE；2：SNAPPY；3：LZ4]</p>
     * @param string $RoleArn <p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
     * @param string $ExternalId <p>外部ID</p>
     * @param AdvancedConsumerConfiguration $AdvancedConfig <p>高级配置项</p>
     * @param string $DSLFilter <p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("NeedContent",$param) and $param["NeedContent"] !== null) {
            $this->NeedContent = $param["NeedContent"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ConsumerContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new Ckafka();
            $this->Ckafka->deserialize($param["Ckafka"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new AdvancedConsumerConfiguration();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
