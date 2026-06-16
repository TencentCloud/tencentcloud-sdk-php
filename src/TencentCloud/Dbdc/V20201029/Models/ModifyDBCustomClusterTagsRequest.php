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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBCustomClusterTags请求参数结构体
 *
 * @method string getClusterId() 获取<p>DB Custom 集群ID</p><p>参数格式：dbcc-xxxxxxxx</p>
 * @method void setClusterId(string $ClusterId) 设置<p>DB Custom 集群ID</p><p>参数格式：dbcc-xxxxxxxx</p>
 * @method array getAddTags() 获取<p>为 DB Custom 集群绑定的标签信息</p><p>入参限制：参考标签平台的限制策略</p>
 * @method void setAddTags(array $AddTags) 设置<p>为 DB Custom 集群绑定的标签信息</p><p>入参限制：参考标签平台的限制策略</p>
 * @method array getDeleteTagKeys() 获取<p>为 DB Custom 集群删除的标签Key</p>
 * @method void setDeleteTagKeys(array $DeleteTagKeys) 设置<p>为 DB Custom 集群删除的标签Key</p>
 */
class ModifyDBCustomClusterTagsRequest extends AbstractModel
{
    /**
     * @var string <p>DB Custom 集群ID</p><p>参数格式：dbcc-xxxxxxxx</p>
     */
    public $ClusterId;

    /**
     * @var array <p>为 DB Custom 集群绑定的标签信息</p><p>入参限制：参考标签平台的限制策略</p>
     */
    public $AddTags;

    /**
     * @var array <p>为 DB Custom 集群删除的标签Key</p>
     */
    public $DeleteTagKeys;

    /**
     * @param string $ClusterId <p>DB Custom 集群ID</p><p>参数格式：dbcc-xxxxxxxx</p>
     * @param array $AddTags <p>为 DB Custom 集群绑定的标签信息</p><p>入参限制：参考标签平台的限制策略</p>
     * @param array $DeleteTagKeys <p>为 DB Custom 集群删除的标签Key</p>
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

        if (array_key_exists("AddTags",$param) and $param["AddTags"] !== null) {
            $this->AddTags = [];
            foreach ($param["AddTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->AddTags, $obj);
            }
        }

        if (array_key_exists("DeleteTagKeys",$param) and $param["DeleteTagKeys"] !== null) {
            $this->DeleteTagKeys = $param["DeleteTagKeys"];
        }
    }
}
