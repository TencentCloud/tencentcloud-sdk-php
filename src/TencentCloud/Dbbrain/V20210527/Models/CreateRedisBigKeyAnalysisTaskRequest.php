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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRedisBigKeyAnalysisTask请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值包括 &quot;redis&quot; - 云数据库 Redis。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值包括 &quot;redis&quot; - 云数据库 Redis。</p>
 * @method array getShardIds() 获取<p>分片节点序号列表。当列表为空时，选择所有分片节点。</p>
 * @method void setShardIds(array $ShardIds) 设置<p>分片节点序号列表。当列表为空时，选择所有分片节点。</p>
 * @method array getKeyDelimiterList() 获取<p>Top Key前缀的分隔符列表。<br>目前仅支持以下分割符：[&quot;,&quot;, &quot;;&quot;, &quot;:&quot;, &quot;_&quot;, &quot;-&quot;, &quot;+&quot;, &quot;@&quot;, &quot;=&quot;, &quot;|&quot;, &quot;#&quot;, &quot;.&quot;]，当列表为空时，默认选择所有分隔符。</p>
 * @method void setKeyDelimiterList(array $KeyDelimiterList) 设置<p>Top Key前缀的分隔符列表。<br>目前仅支持以下分割符：[&quot;,&quot;, &quot;;&quot;, &quot;:&quot;, &quot;_&quot;, &quot;-&quot;, &quot;+&quot;, &quot;@&quot;, &quot;=&quot;, &quot;|&quot;, &quot;#&quot;, &quot;.&quot;]，当列表为空时，默认选择所有分隔符。</p>
 * @method string getBackupId() 获取<p>历史备份文件ID</p>
 * @method void setBackupId(string $BackupId) 设置<p>历史备份文件ID</p>
 */
class CreateRedisBigKeyAnalysisTaskRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>服务产品类型，支持值包括 &quot;redis&quot; - 云数据库 Redis。</p>
     */
    public $Product;

    /**
     * @var array <p>分片节点序号列表。当列表为空时，选择所有分片节点。</p>
     */
    public $ShardIds;

    /**
     * @var array <p>Top Key前缀的分隔符列表。<br>目前仅支持以下分割符：[&quot;,&quot;, &quot;;&quot;, &quot;:&quot;, &quot;_&quot;, &quot;-&quot;, &quot;+&quot;, &quot;@&quot;, &quot;=&quot;, &quot;|&quot;, &quot;#&quot;, &quot;.&quot;]，当列表为空时，默认选择所有分隔符。</p>
     */
    public $KeyDelimiterList;

    /**
     * @var string <p>历史备份文件ID</p>
     */
    public $BackupId;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     * @param string $Product <p>服务产品类型，支持值包括 &quot;redis&quot; - 云数据库 Redis。</p>
     * @param array $ShardIds <p>分片节点序号列表。当列表为空时，选择所有分片节点。</p>
     * @param array $KeyDelimiterList <p>Top Key前缀的分隔符列表。<br>目前仅支持以下分割符：[&quot;,&quot;, &quot;;&quot;, &quot;:&quot;, &quot;_&quot;, &quot;-&quot;, &quot;+&quot;, &quot;@&quot;, &quot;=&quot;, &quot;|&quot;, &quot;#&quot;, &quot;.&quot;]，当列表为空时，默认选择所有分隔符。</p>
     * @param string $BackupId <p>历史备份文件ID</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ShardIds",$param) and $param["ShardIds"] !== null) {
            $this->ShardIds = $param["ShardIds"];
        }

        if (array_key_exists("KeyDelimiterList",$param) and $param["KeyDelimiterList"] !== null) {
            $this->KeyDelimiterList = $param["KeyDelimiterList"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }
    }
}
