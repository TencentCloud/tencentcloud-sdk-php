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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTkeCosBuckets请求参数结构体
 *
 * @method string getBucketName() 获取<p>cos 桶名字</p>
 * @method void setBucketName(string $BucketName) 设置<p>cos 桶名字</p>
 * @method integer getLimit() 获取<p>分页 Limit</p>
 * @method void setLimit(integer $Limit) 设置<p>分页 Limit</p>
 * @method integer getOffset() 获取<p>分页 Offset</p>
 * @method void setOffset(integer $Offset) 设置<p>分页 Offset</p>
 */
class ListTkeCosBucketsRequest extends AbstractModel
{
    /**
     * @var string <p>cos 桶名字</p>
     */
    public $BucketName;

    /**
     * @var integer <p>分页 Limit</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页 Offset</p>
     */
    public $Offset;

    /**
     * @param string $BucketName <p>cos 桶名字</p>
     * @param integer $Limit <p>分页 Limit</p>
     * @param integer $Offset <p>分页 Offset</p>
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
