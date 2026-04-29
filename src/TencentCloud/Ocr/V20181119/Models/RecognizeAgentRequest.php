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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeAgent请求参数结构体
 *
 * @method string getImageUrl() 获取<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method string getImageBase64() 获取<p>图片/PDF的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片/PDF的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method integer getPdfPageNumber() 获取<p>需识别的PDF页码。仅支持PDF单页识别，当上传文件为PDF时有效。</p><p>默认值：1</p>
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置<p>需识别的PDF页码。仅支持PDF单页识别，当上传文件为PDF时有效。</p><p>默认值：1</p>
 * @method integer getSelectModel() 获取<p>模型选择。</p><p>枚举值：</p><ul><li>0： 推理模型。</li><li>1： 识别、推理模型。</li></ul><p>默认值：0</p>
 * @method void setSelectModel(integer $SelectModel) 设置<p>模型选择。</p><p>枚举值：</p><ul><li>0： 推理模型。</li><li>1： 识别、推理模型。</li></ul><p>默认值：0</p>
 * @method integer getQueryType() 获取<p>任务类型。</p><p>枚举值：</p><ul><li><p>0： 全文识别。识别且输出全文内容。</p></li><li><p>1： 判断。判断输入图的内容是否为Query中的内容，返回结果为是或否。如Query:&quot;增值税发票&quot;，该任务类型下，将判断输入图是否为增值税发票，返回&quot;是&quot;或&quot;否&quot;。</p></li><li><p>2： 分类。判断输入图属于Query中具体哪个分类项。如Query:[&quot;营业执照&quot;,&quot;合同&quot;,&quot;票据&quot;]，在该任务类型下，将判断输入图是否属于&quot;营业执照&quot;、&quot;合同&quot;、&quot;票据&quot;，返回&quot;营业执照&quot;/&quot;合同&quot;/&quot;票据&quot;或&quot;均不符合&quot;。</p></li><li><p>3： 总结提炼。总结输入图与Query相关的内容。如Query:&quot;工作经历&quot;，在该任务类型下，将输出输入图中和&quot;工作经历&quot;相关的内容，或&quot;无相关内容&quot;。</p></li><li><p>4： 信息提取。按照自定义字段提取Key-Value，且支持多层级提取，详见入参SchemaItems说明。入参可参考下面的接口示例QueryType=4场景</p></li></ul><p>默认值：0</p>
 * @method void setQueryType(integer $QueryType) 设置<p>任务类型。</p><p>枚举值：</p><ul><li><p>0： 全文识别。识别且输出全文内容。</p></li><li><p>1： 判断。判断输入图的内容是否为Query中的内容，返回结果为是或否。如Query:&quot;增值税发票&quot;，该任务类型下，将判断输入图是否为增值税发票，返回&quot;是&quot;或&quot;否&quot;。</p></li><li><p>2： 分类。判断输入图属于Query中具体哪个分类项。如Query:[&quot;营业执照&quot;,&quot;合同&quot;,&quot;票据&quot;]，在该任务类型下，将判断输入图是否属于&quot;营业执照&quot;、&quot;合同&quot;、&quot;票据&quot;，返回&quot;营业执照&quot;/&quot;合同&quot;/&quot;票据&quot;或&quot;均不符合&quot;。</p></li><li><p>3： 总结提炼。总结输入图与Query相关的内容。如Query:&quot;工作经历&quot;，在该任务类型下，将输出输入图中和&quot;工作经历&quot;相关的内容，或&quot;无相关内容&quot;。</p></li><li><p>4： 信息提取。按照自定义字段提取Key-Value，且支持多层级提取，详见入参SchemaItems说明。入参可参考下面的接口示例QueryType=4场景</p></li></ul><p>默认值：0</p>
 * @method array getSchemaItems() 获取<p>自定义提取字段的结构，详见SchemaList结构。仅当QueryType=4时生效。</p><p>注：.N表示数组型参数。</p>
 * @method void setSchemaItems(array $SchemaItems) 设置<p>自定义提取字段的结构，详见SchemaList结构。仅当QueryType=4时生效。</p><p>注：.N表示数组型参数。</p>
 * @method array getQuery() 获取<p>推理任务的提示词。与QueryType搭配使用，具体说明见QueryType描述。1）仅当QueryType=1/2/3时生效，且QueryType=1/3时，长度必须为1；2）QueryType=2，Query长度必须符合2≤x≤5。</p><p>注：.N表示数组型参数。</p>
 * @method void setQuery(array $Query) 设置<p>推理任务的提示词。与QueryType搭配使用，具体说明见QueryType描述。1）仅当QueryType=1/2/3时生效，且QueryType=1/3时，长度必须为1；2）QueryType=2，Query长度必须符合2≤x≤5。</p><p>注：.N表示数组型参数。</p>
 * @method boolean getEnableCoord() 获取<p>是否需要返回坐标。</p><p>默认值：false</p><p>注：仅对QueryType=4时生效，且坐标位置为 Response.ExtractFields.Polygon。</p>
 * @method void setEnableCoord(boolean $EnableCoord) 设置<p>是否需要返回坐标。</p><p>默认值：false</p><p>注：仅对QueryType=4时生效，且坐标位置为 Response.ExtractFields.Polygon。</p>
 */
class RecognizeAgentRequest extends AbstractModel
{
    /**
     * @var string <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>图片/PDF的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     */
    public $ImageBase64;

    /**
     * @var integer <p>需识别的PDF页码。仅支持PDF单页识别，当上传文件为PDF时有效。</p><p>默认值：1</p>
     */
    public $PdfPageNumber;

    /**
     * @var integer <p>模型选择。</p><p>枚举值：</p><ul><li>0： 推理模型。</li><li>1： 识别、推理模型。</li></ul><p>默认值：0</p>
     */
    public $SelectModel;

    /**
     * @var integer <p>任务类型。</p><p>枚举值：</p><ul><li><p>0： 全文识别。识别且输出全文内容。</p></li><li><p>1： 判断。判断输入图的内容是否为Query中的内容，返回结果为是或否。如Query:&quot;增值税发票&quot;，该任务类型下，将判断输入图是否为增值税发票，返回&quot;是&quot;或&quot;否&quot;。</p></li><li><p>2： 分类。判断输入图属于Query中具体哪个分类项。如Query:[&quot;营业执照&quot;,&quot;合同&quot;,&quot;票据&quot;]，在该任务类型下，将判断输入图是否属于&quot;营业执照&quot;、&quot;合同&quot;、&quot;票据&quot;，返回&quot;营业执照&quot;/&quot;合同&quot;/&quot;票据&quot;或&quot;均不符合&quot;。</p></li><li><p>3： 总结提炼。总结输入图与Query相关的内容。如Query:&quot;工作经历&quot;，在该任务类型下，将输出输入图中和&quot;工作经历&quot;相关的内容，或&quot;无相关内容&quot;。</p></li><li><p>4： 信息提取。按照自定义字段提取Key-Value，且支持多层级提取，详见入参SchemaItems说明。入参可参考下面的接口示例QueryType=4场景</p></li></ul><p>默认值：0</p>
     */
    public $QueryType;

    /**
     * @var array <p>自定义提取字段的结构，详见SchemaList结构。仅当QueryType=4时生效。</p><p>注：.N表示数组型参数。</p>
     */
    public $SchemaItems;

    /**
     * @var array <p>推理任务的提示词。与QueryType搭配使用，具体说明见QueryType描述。1）仅当QueryType=1/2/3时生效，且QueryType=1/3时，长度必须为1；2）QueryType=2，Query长度必须符合2≤x≤5。</p><p>注：.N表示数组型参数。</p>
     */
    public $Query;

    /**
     * @var boolean <p>是否需要返回坐标。</p><p>默认值：false</p><p>注：仅对QueryType=4时生效，且坐标位置为 Response.ExtractFields.Polygon。</p>
     */
    public $EnableCoord;

    /**
     * @param string $ImageUrl <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     * @param string $ImageBase64 <p>图片/PDF的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     * @param integer $PdfPageNumber <p>需识别的PDF页码。仅支持PDF单页识别，当上传文件为PDF时有效。</p><p>默认值：1</p>
     * @param integer $SelectModel <p>模型选择。</p><p>枚举值：</p><ul><li>0： 推理模型。</li><li>1： 识别、推理模型。</li></ul><p>默认值：0</p>
     * @param integer $QueryType <p>任务类型。</p><p>枚举值：</p><ul><li><p>0： 全文识别。识别且输出全文内容。</p></li><li><p>1： 判断。判断输入图的内容是否为Query中的内容，返回结果为是或否。如Query:&quot;增值税发票&quot;，该任务类型下，将判断输入图是否为增值税发票，返回&quot;是&quot;或&quot;否&quot;。</p></li><li><p>2： 分类。判断输入图属于Query中具体哪个分类项。如Query:[&quot;营业执照&quot;,&quot;合同&quot;,&quot;票据&quot;]，在该任务类型下，将判断输入图是否属于&quot;营业执照&quot;、&quot;合同&quot;、&quot;票据&quot;，返回&quot;营业执照&quot;/&quot;合同&quot;/&quot;票据&quot;或&quot;均不符合&quot;。</p></li><li><p>3： 总结提炼。总结输入图与Query相关的内容。如Query:&quot;工作经历&quot;，在该任务类型下，将输出输入图中和&quot;工作经历&quot;相关的内容，或&quot;无相关内容&quot;。</p></li><li><p>4： 信息提取。按照自定义字段提取Key-Value，且支持多层级提取，详见入参SchemaItems说明。入参可参考下面的接口示例QueryType=4场景</p></li></ul><p>默认值：0</p>
     * @param array $SchemaItems <p>自定义提取字段的结构，详见SchemaList结构。仅当QueryType=4时生效。</p><p>注：.N表示数组型参数。</p>
     * @param array $Query <p>推理任务的提示词。与QueryType搭配使用，具体说明见QueryType描述。1）仅当QueryType=1/2/3时生效，且QueryType=1/3时，长度必须为1；2）QueryType=2，Query长度必须符合2≤x≤5。</p><p>注：.N表示数组型参数。</p>
     * @param boolean $EnableCoord <p>是否需要返回坐标。</p><p>默认值：false</p><p>注：仅对QueryType=4时生效，且坐标位置为 Response.ExtractFields.Polygon。</p>
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("SelectModel",$param) and $param["SelectModel"] !== null) {
            $this->SelectModel = $param["SelectModel"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("SchemaItems",$param) and $param["SchemaItems"] !== null) {
            $this->SchemaItems = [];
            foreach ($param["SchemaItems"] as $key => $value){
                $obj = new SchemaList();
                $obj->deserialize($value);
                array_push($this->SchemaItems, $obj);
            }
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EnableCoord",$param) and $param["EnableCoord"] !== null) {
            $this->EnableCoord = $param["EnableCoord"];
        }
    }
}
