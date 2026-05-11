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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 场景化视频结果文件上传COS时，需传入的信息。 需创建并授权LVB_QCSRole角色。
 *
 * @method string getCosBucketName() 获取<p>Cos桶名称。</p>
 * @method void setCosBucketName(string $CosBucketName) 设置<p>Cos桶名称。</p>
 * @method string getCosBucketRegion() 获取<p>Cos桶地域。</p>
 * @method void setCosBucketRegion(string $CosBucketRegion) 设置<p>Cos桶地域。</p>
 * @method string getCosBucketPath() 获取<p>存储路径。</p>
 * @method void setCosBucketPath(string $CosBucketPath) 设置<p>存储路径。</p>
 */
class SceneStoreCosParam extends AbstractModel
{
    /**
     * @var string <p>Cos桶名称。</p>
     */
    public $CosBucketName;

    /**
     * @var string <p>Cos桶地域。</p>
     */
    public $CosBucketRegion;

    /**
     * @var string <p>存储路径。</p>
     */
    public $CosBucketPath;

    /**
     * @param string $CosBucketName <p>Cos桶名称。</p>
     * @param string $CosBucketRegion <p>Cos桶地域。</p>
     * @param string $CosBucketPath <p>存储路径。</p>
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
