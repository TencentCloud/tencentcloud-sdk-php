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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务日志列表
 *
 * @method integer getTotalCount() 获取<p>总条数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总条数</p>
 * @method array getContent() 获取<p>业务日志列表</p>
 * @method void setContent(array $Content) 设置<p>业务日志列表</p>
 * @method string getScrollId() 获取<p>游标ID</p>
 * @method void setScrollId(string $ScrollId) 设置<p>游标ID</p>
 * @method string getStatus() 获取<p>查询状态，SUCCESS：查询成功完成，ERROR_RANGE_EXCEED：查询范围过大异常，ERROR_COMPLEX_CONDITION：查询条件复杂异常，ERROR_OTHER_CAUSE：其他异常</p>
 * @method void setStatus(string $Status) 设置<p>查询状态，SUCCESS：查询成功完成，ERROR_RANGE_EXCEED：查询范围过大异常，ERROR_COMPLEX_CONDITION：查询条件复杂异常，ERROR_OTHER_CAUSE：其他异常</p>
 * @method array getSearchAfter() 获取<p>查询es时，使用searchAfter返回的游标</p>
 * @method void setSearchAfter(array $SearchAfter) 设置<p>查询es时，使用searchAfter返回的游标</p>
 * @method boolean getCompressed() 获取<p>是否压缩</p>
 * @method void setCompressed(boolean $Compressed) 设置<p>是否压缩</p>
 */
class TsfPageBusinessLogV2 extends AbstractModel
{
    /**
     * @var integer <p>总条数</p>
     */
    public $TotalCount;

    /**
     * @var array <p>业务日志列表</p>
     */
    public $Content;

    /**
     * @var string <p>游标ID</p>
     */
    public $ScrollId;

    /**
     * @var string <p>查询状态，SUCCESS：查询成功完成，ERROR_RANGE_EXCEED：查询范围过大异常，ERROR_COMPLEX_CONDITION：查询条件复杂异常，ERROR_OTHER_CAUSE：其他异常</p>
     */
    public $Status;

    /**
     * @var array <p>查询es时，使用searchAfter返回的游标</p>
     */
    public $SearchAfter;

    /**
     * @var boolean <p>是否压缩</p>
     */
    public $Compressed;

    /**
     * @param integer $TotalCount <p>总条数</p>
     * @param array $Content <p>业务日志列表</p>
     * @param string $ScrollId <p>游标ID</p>
     * @param string $Status <p>查询状态，SUCCESS：查询成功完成，ERROR_RANGE_EXCEED：查询范围过大异常，ERROR_COMPLEX_CONDITION：查询条件复杂异常，ERROR_OTHER_CAUSE：其他异常</p>
     * @param array $SearchAfter <p>查询es时，使用searchAfter返回的游标</p>
     * @param boolean $Compressed <p>是否压缩</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new BusinessLogV2();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("ScrollId",$param) and $param["ScrollId"] !== null) {
            $this->ScrollId = $param["ScrollId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SearchAfter",$param) and $param["SearchAfter"] !== null) {
            $this->SearchAfter = $param["SearchAfter"];
        }

        if (array_key_exists("Compressed",$param) and $param["Compressed"] !== null) {
            $this->Compressed = $param["Compressed"];
        }
    }
}
