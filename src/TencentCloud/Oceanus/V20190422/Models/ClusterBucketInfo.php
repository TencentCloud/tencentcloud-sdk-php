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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ClusterBucketInfo 结构
 *
 * @method string getSerialId() 获取<p>桶唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialId(string $SerialId) 设置<p>桶唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterId() 获取<p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(integer $ClusterId) 设置<p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucket() 获取<p>桶名字</p>
 * @method void setBucket(string $Bucket) 设置<p>桶名字</p>
 * @method integer getBucketType() 获取<p>桶类型</p><p>枚举值：</p><ul><li>0： 普通桶</li><li>1： 加速桶</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketType(integer $BucketType) 设置<p>桶类型</p><p>枚举值：</p><ul><li>0： 普通桶</li><li>1： 加速桶</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthMode() 获取<p>鉴权类型</p><p>枚举值：</p><ul><li>0： 不鉴权</li><li>1： 鉴权</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthMode(integer $AuthMode) 设置<p>鉴权类型</p><p>枚举值：</p><ul><li>0： 不鉴权</li><li>1： 鉴权</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefault() 获取<p>是否默认属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(integer $IsDefault) 设置<p>是否默认属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>桶状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>0： 禁用</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>桶状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>0： 禁用</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobCount() 获取<p>作业数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobCount(integer $JobCount) 设置<p>作业数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：yyyy-MM-dd HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：yyyy-MM-dd HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p><p>参数格式：yyyy-MM-dd HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p><p>参数格式：yyyy-MM-dd HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterBucketInfo extends AbstractModel
{
    /**
     * @var string <p>桶唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialId;

    /**
     * @var integer <p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>桶名字</p>
     */
    public $Bucket;

    /**
     * @var integer <p>桶类型</p><p>枚举值：</p><ul><li>0： 普通桶</li><li>1： 加速桶</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketType;

    /**
     * @var integer <p>鉴权类型</p><p>枚举值：</p><ul><li>0： 不鉴权</li><li>1： 鉴权</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthMode;

    /**
     * @var integer <p>是否默认属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @var integer <p>桶状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>0： 禁用</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>作业数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobCount;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>创建时间</p><p>参数格式：yyyy-MM-dd HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：yyyy-MM-dd HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $SerialId <p>桶唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterId <p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Bucket <p>桶名字</p>
     * @param integer $BucketType <p>桶类型</p><p>枚举值：</p><ul><li>0： 普通桶</li><li>1： 加速桶</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthMode <p>鉴权类型</p><p>枚举值：</p><ul><li>0： 不鉴权</li><li>1： 鉴权</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefault <p>是否默认属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>桶状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>0： 禁用</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobCount <p>作业数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p><p>参数格式：yyyy-MM-dd HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p><p>参数格式：yyyy-MM-dd HH:mm:ss</p>
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
        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("BucketType",$param) and $param["BucketType"] !== null) {
            $this->BucketType = $param["BucketType"];
        }

        if (array_key_exists("AuthMode",$param) and $param["AuthMode"] !== null) {
            $this->AuthMode = $param["AuthMode"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("JobCount",$param) and $param["JobCount"] !== null) {
            $this->JobCount = $param["JobCount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
