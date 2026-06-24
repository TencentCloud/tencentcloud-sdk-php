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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterTags请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method array getTags() 获取<p>集群标签:<br>[{&quot;TagKey&quot;:&quot;env&quot;,&quot;TagValue&quot;:&quot;dev&quot;}]}]</p>
 * @method void setTags(array $Tags) 设置<p>集群标签:<br>[{&quot;TagKey&quot;:&quot;env&quot;,&quot;TagValue&quot;:&quot;dev&quot;}]}]</p>
 * @method boolean getSyncSubresource() 获取<p>是否同步集群内子资源标签</p>
 * @method void setSyncSubresource(boolean $SyncSubresource) 设置<p>是否同步集群内子资源标签</p>
 * @method boolean getSyncNodePoolTags() 获取<p>是否同步节点池标签</p>
 * @method void setSyncNodePoolTags(boolean $SyncNodePoolTags) 设置<p>是否同步节点池标签</p>
 */
class ModifyClusterTagsRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var array <p>集群标签:<br>[{&quot;TagKey&quot;:&quot;env&quot;,&quot;TagValue&quot;:&quot;dev&quot;}]}]</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否同步集群内子资源标签</p>
     */
    public $SyncSubresource;

    /**
     * @var boolean <p>是否同步节点池标签</p>
     */
    public $SyncNodePoolTags;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param array $Tags <p>集群标签:<br>[{&quot;TagKey&quot;:&quot;env&quot;,&quot;TagValue&quot;:&quot;dev&quot;}]}]</p>
     * @param boolean $SyncSubresource <p>是否同步集群内子资源标签</p>
     * @param boolean $SyncNodePoolTags <p>是否同步节点池标签</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SyncSubresource",$param) and $param["SyncSubresource"] !== null) {
            $this->SyncSubresource = $param["SyncSubresource"];
        }

        if (array_key_exists("SyncNodePoolTags",$param) and $param["SyncNodePoolTags"] !== null) {
            $this->SyncNodePoolTags = $param["SyncNodePoolTags"];
        }
    }
}
