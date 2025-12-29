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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aigc结果文件上传COS时，需传入的信息。 需创建并授权LVB_QCSRole角色。
 *
 * @method string getCosBucketName() 获取存储至 cos 的 bucket 桶名称。需要cos存储时，该值必填。 示例值：bucket。
 * @method void setCosBucketName(string $CosBucketName) 设置存储至 cos 的 bucket 桶名称。需要cos存储时，该值必填。 示例值：bucket。
 * @method string getCosBucketRegion() 获取存储至 cos 的 bucket 区域。与bucket所属区域相同，上传cos时必填。 示例值：ap-guangzhou
 * @method void setCosBucketRegion(string $CosBucketRegion) 设置存储至 cos 的 bucket 区域。与bucket所属区域相同，上传cos时必填。 示例值：ap-guangzhou
 * @method string getCosBucketPath() 获取存储至 cos 的 bucket 路径。
可选。
示例值：my_file
 * @method void setCosBucketPath(string $CosBucketPath) 设置存储至 cos 的 bucket 路径。
可选。
示例值：my_file
 */
class AigcStoreCosParam extends AbstractModel
{
    /**
     * @var string 存储至 cos 的 bucket 桶名称。需要cos存储时，该值必填。 示例值：bucket。
     */
    public $CosBucketName;

    /**
     * @var string 存储至 cos 的 bucket 区域。与bucket所属区域相同，上传cos时必填。 示例值：ap-guangzhou
     */
    public $CosBucketRegion;

    /**
     * @var string 存储至 cos 的 bucket 路径。
可选。
示例值：my_file
     */
    public $CosBucketPath;

    /**
     * @param string $CosBucketName 存储至 cos 的 bucket 桶名称。需要cos存储时，该值必填。 示例值：bucket。
     * @param string $CosBucketRegion 存储至 cos 的 bucket 区域。与bucket所属区域相同，上传cos时必填。 示例值：ap-guangzhou
     * @param string $CosBucketPath 存储至 cos 的 bucket 路径。
可选。
示例值：my_file
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
        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosBucketRegion",$param) and $param["CosBucketRegion"] !== null) {
            $this->CosBucketRegion = $param["CosBucketRegion"];
        }

        if (array_key_exists("CosBucketPath",$param) and $param["CosBucketPath"] !== null) {
            $this->CosBucketPath = $param["CosBucketPath"];
        }
    }
}
