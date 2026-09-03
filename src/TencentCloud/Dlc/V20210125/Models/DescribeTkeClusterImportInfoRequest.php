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
 * DescribeTkeClusterImportInfo请求参数结构体
 *
 * @method string getEmrClusterId() 获取<p>EMR 集群 ID（注意：不是 TKE 集群 ID）。</p>
 * @method void setEmrClusterId(string $EmrClusterId) 设置<p>EMR 集群 ID（注意：不是 TKE 集群 ID）。</p>
 */
class DescribeTkeClusterImportInfoRequest extends AbstractModel
{
    /**
     * @var string <p>EMR 集群 ID（注意：不是 TKE 集群 ID）。</p>
     */
    public $EmrClusterId;

    /**
     * @param string $EmrClusterId <p>EMR 集群 ID（注意：不是 TKE 集群 ID）。</p>
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
        if (array_key_exists("EmrClusterId",$param) and $param["EmrClusterId"] !== null) {
            $this->EmrClusterId = $param["EmrClusterId"];
        }
    }
}
