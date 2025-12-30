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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateBindResourceTaskDetail请求参数结构体
 *
 * @method string getTaskId() 获取<p>任务ID，根据CreateCertificateBindResourceSyncTask得到的任务ID查询绑定云资源结果</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID，根据CreateCertificateBindResourceSyncTask得到的任务ID查询绑定云资源结果</p>
 * @method string getLimit() 获取<p>每页展示数量， 默认10，最大值100; 分页总数为云资源地域下实例总数， 即第一页会拉群每个云资源的地域下面Limit数量实例</p>
 * @method void setLimit(string $Limit) 设置<p>每页展示数量， 默认10，最大值100; 分页总数为云资源地域下实例总数， 即第一页会拉群每个云资源的地域下面Limit数量实例</p>
 * @method string getOffset() 获取<p>当前偏移量，默认为0</p>
 * @method void setOffset(string $Offset) 设置<p>当前偏移量，默认为0</p>
 * @method array getResourceTypes() 获取<p>查询资源类型的结果详情， 不传则查询所有，取值支持：- clb- cdn- ddos- live- vod- waf- apigateway- teo- tke- cos- tse- tcb</p>
 * @method void setResourceTypes(array $ResourceTypes) 设置<p>查询资源类型的结果详情， 不传则查询所有，取值支持：- clb- cdn- ddos- live- vod- waf- apigateway- teo- tke- cos- tse- tcb</p>
 * @method array getRegions() 获取<p>查询地域列表的数据，clb、tke、waf、apigateway、tcb、cos、tse支持地域查询， 其他资源类型不支持</p>
 * @method void setRegions(array $Regions) 设置<p>查询地域列表的数据，clb、tke、waf、apigateway、tcb、cos、tse支持地域查询， 其他资源类型不支持</p>
 */
class DescribeCertificateBindResourceTaskDetailRequest extends AbstractModel
{
    /**
     * @var string <p>任务ID，根据CreateCertificateBindResourceSyncTask得到的任务ID查询绑定云资源结果</p>
     */
    public $TaskId;

    /**
     * @var string <p>每页展示数量， 默认10，最大值100; 分页总数为云资源地域下实例总数， 即第一页会拉群每个云资源的地域下面Limit数量实例</p>
     */
    public $Limit;

    /**
     * @var string <p>当前偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var array <p>查询资源类型的结果详情， 不传则查询所有，取值支持：- clb- cdn- ddos- live- vod- waf- apigateway- teo- tke- cos- tse- tcb</p>
     */
    public $ResourceTypes;

    /**
     * @var array <p>查询地域列表的数据，clb、tke、waf、apigateway、tcb、cos、tse支持地域查询， 其他资源类型不支持</p>
     */
    public $Regions;

    /**
     * @param string $TaskId <p>任务ID，根据CreateCertificateBindResourceSyncTask得到的任务ID查询绑定云资源结果</p>
     * @param string $Limit <p>每页展示数量， 默认10，最大值100; 分页总数为云资源地域下实例总数， 即第一页会拉群每个云资源的地域下面Limit数量实例</p>
     * @param string $Offset <p>当前偏移量，默认为0</p>
     * @param array $ResourceTypes <p>查询资源类型的结果详情， 不传则查询所有，取值支持：- clb- cdn- ddos- live- vod- waf- apigateway- teo- tke- cos- tse- tcb</p>
     * @param array $Regions <p>查询地域列表的数据，clb、tke、waf、apigateway、tcb、cos、tse支持地域查询， 其他资源类型不支持</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}
