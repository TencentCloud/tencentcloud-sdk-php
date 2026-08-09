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
 * CreateMetaTable请求参数结构体
 *
 * @method integer getCatalogId() 获取<p>Catalog Id</p>
 * @method void setCatalogId(integer $CatalogId) 设置<p>Catalog Id</p>
 * @method integer getDatabaseId() 获取<p>库Id</p>
 * @method void setDatabaseId(integer $DatabaseId) 设置<p>库Id</p>
 * @method string getSqlCode() 获取<p>建表语句</p><p>参数格式：需要base64加密</p>
 * @method void setSqlCode(string $SqlCode) 设置<p>建表语句</p><p>参数格式：需要base64加密</p>
 * @method string getComment() 获取<p>备注</p>
 * @method void setComment(string $Comment) 设置<p>备注</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method array getResourceRefs() 获取<p>引用资源</p>
 * @method void setResourceRefs(array $ResourceRefs) 设置<p>引用资源</p>
 * @method string getFlinkVersion() 获取<p>Flink版本</p>
 * @method void setFlinkVersion(string $FlinkVersion) 设置<p>Flink版本</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 SerialId</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 SerialId</p>
 * @method string getAsyncTaskId() 获取<p>异步id</p>
 * @method void setAsyncTaskId(string $AsyncTaskId) 设置<p>异步id</p>
 */
class CreateMetaTableRequest extends AbstractModel
{
    /**
     * @var integer <p>Catalog Id</p>
     */
    public $CatalogId;

    /**
     * @var integer <p>库Id</p>
     */
    public $DatabaseId;

    /**
     * @var string <p>建表语句</p><p>参数格式：需要base64加密</p>
     */
    public $SqlCode;

    /**
     * @var string <p>备注</p>
     */
    public $Comment;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var array <p>引用资源</p>
     */
    public $ResourceRefs;

    /**
     * @var string <p>Flink版本</p>
     */
    public $FlinkVersion;

    /**
     * @var string <p>工作空间 SerialId</p>
     */
    public $WorkSpaceId;

    /**
     * @var string <p>异步id</p>
     */
    public $AsyncTaskId;

    /**
     * @param integer $CatalogId <p>Catalog Id</p>
     * @param integer $DatabaseId <p>库Id</p>
     * @param string $SqlCode <p>建表语句</p><p>参数格式：需要base64加密</p>
     * @param string $Comment <p>备注</p>
     * @param string $ClusterId <p>集群id</p>
     * @param array $ResourceRefs <p>引用资源</p>
     * @param string $FlinkVersion <p>Flink版本</p>
     * @param string $WorkSpaceId <p>工作空间 SerialId</p>
     * @param string $AsyncTaskId <p>异步id</p>
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
        if (array_key_exists("CatalogId",$param) and $param["CatalogId"] !== null) {
            $this->CatalogId = $param["CatalogId"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("SqlCode",$param) and $param["SqlCode"] !== null) {
            $this->SqlCode = $param["SqlCode"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ResourceRefs",$param) and $param["ResourceRefs"] !== null) {
            $this->ResourceRefs = [];
            foreach ($param["ResourceRefs"] as $key => $value){
                $obj = new ResourceRef();
                $obj->deserialize($value);
                array_push($this->ResourceRefs, $obj);
            }
        }

        if (array_key_exists("FlinkVersion",$param) and $param["FlinkVersion"] !== null) {
            $this->FlinkVersion = $param["FlinkVersion"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("AsyncTaskId",$param) and $param["AsyncTaskId"] !== null) {
            $this->AsyncTaskId = $param["AsyncTaskId"];
        }
    }
}
