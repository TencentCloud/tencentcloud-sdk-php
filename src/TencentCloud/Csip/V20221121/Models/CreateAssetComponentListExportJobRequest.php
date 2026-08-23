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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAssetComponentListExportJob请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method Filter getFilter() 获取<p>筛选项</p>
 * @method void setFilter(Filter $Filter) 设置<p>筛选项</p>
 * @method integer getSave() 获取<p>是否保存到导出任务中</p><p>枚举值：</p><ul><li>0： 不保存</li><li>1： 保存</li></ul>
 * @method void setSave(integer $Save) 设置<p>是否保存到导出任务中</p><p>枚举值：</p><ul><li>0： 不保存</li><li>1： 保存</li></ul>
 * @method string getExportName() 获取<p>保存文件名</p>
 * @method void setExportName(string $ExportName) 设置<p>保存文件名</p>
 */
class CreateAssetComponentListExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>筛选项</p>
     */
    public $Filter;

    /**
     * @var integer <p>是否保存到导出任务中</p><p>枚举值：</p><ul><li>0： 不保存</li><li>1： 保存</li></ul>
     */
    public $Save;

    /**
     * @var string <p>保存文件名</p>
     */
    public $ExportName;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param Filter $Filter <p>筛选项</p>
     * @param integer $Save <p>是否保存到导出任务中</p><p>枚举值：</p><ul><li>0： 不保存</li><li>1： 保存</li></ul>
     * @param string $ExportName <p>保存文件名</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Save",$param) and $param["Save"] !== null) {
            $this->Save = $param["Save"];
        }

        if (array_key_exists("ExportName",$param) and $param["ExportName"] !== null) {
            $this->ExportName = $param["ExportName"];
        }
    }
}
